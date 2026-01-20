<?php

namespace App\Traits;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Setting;
use App\Models\PromoCode;
use App\Models\TrackOrder;
use App\Models\ItemVariant;
use Illuminate\Support\Str;
use App\Helpers\PriceHelper;
use App\Models\OrderDetails;
use App\Models\RewardPointHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

trait RewardPointPayment
{

    public function rewardPointSubmit(array $data): array
    {
        $user = Auth::user();

        if (!$user) {
            return [
                'status' => false,
                'message' => 'User not authenticated',
            ];
        }


            /** ================= CART ================= */
            if (auth()->check()) {
                $cart = Cart::where('user_id', $user->id)->get();
            } else {
                $cart = Cart::where('session_id', session('cartSession'))->get();
            }

            if ($cart->isEmpty()) {
                return [
                    'status' => false,
                    'message' => 'Cart is empty',
                ];
            }

            /** ================= TOTAL CALCULATION ================= */
            $cart_total = 0;
            $total_tax = 0;

            foreach ($cart as $item) {
                $item_variant = ItemVariant::find($item->item_variant_id);

                $cart_total +=
                    ($item->item->discount_price
                        + ($item_variant ? $item_variant->additional_price : 0))
                    * $item->quantity;
            }

            $discount = Session::get('coupon', []);
            $shipping = $data['shipping_charge'] ?? 0;

            $grand_total = $cart_total + $total_tax + $shipping;
            $grand_total -= ($discount ? $discount['discount'] : 0);

            // 🔹 your existing helper
            $total_amount = PriceHelper::setConvertPrice($grand_total);

            /** ================= REWARD POINT CHECK ================= */
            // 🔹 your existing helper
            $usePoint = PriceHelper::rewardPointUse($total_amount);

            if ($usePoint <= 0 || $user->reward_point < $usePoint) {
                return [
                    'status' => false,
                    'message' => 'Insufficient reward points',
                ];
            }

            /** ================= ORDER ================= */
            $orderData = [];
            $orderData['cart'] = json_encode($cart);
            $orderData['discount'] = json_encode($discount);
            $orderData['shipping'] = $shipping;
            $orderData['tax'] = $total_tax;
            $orderData['state_price'] = $cart_total;
            $orderData['shipping_info'] = json_encode(Session::get('shipping_address'));
            $orderData['billing_info'] = json_encode(Session::get('billing_address'));
            $orderData['payment_method'] = 'Reward Point';
            $orderData['payment_status'] = 'Paid';
            $orderData['order_status'] = 'Pending';
            $orderData['user_id'] = $user->id;
            $orderData['transaction_number'] = Str::random(10);
            $orderData['currency_sign'] = PriceHelper::setCurrencySign();
            $orderData['currency_value'] = PriceHelper::setCurrencyValue();
            $orderData['is_reward_point_used'] = 1;

            $order = Order::create($orderData);

            $order->transaction_number =
                'ORD-' . Carbon::now()->format('Ymd') . '-' . $order->id;
            $order->save();

            /** ================= ORDER DETAILS ================= */
            foreach ($cart as $item) {
                $item_variant = ItemVariant::find($item->item_variant_id);

                OrderDetails::create([
                    'order_id' => $order->id,
                    'item_id' => $item->item_id,
                    'qty' => $item->quantity,
                    'price' => $item->item->discount_price,
                    'variant_price' => $item_variant ? $item_variant->additional_price : 0,
                    'item_variant_id' => $item->item_variant_id,
                    'total_price' =>
                        ($item->item->discount_price
                            + ($item_variant ? $item_variant->additional_price : 0))
                        * $item->quantity,
                ]);
            }

            TrackOrder::create([
                'title' => 'Pending',
                'order_id' => $order->id,
            ]);

            /** ================= COUPON ================= */
            if ($discount) {
                $coupon_id = $discount['code']['id'] ?? null;
                if ($coupon_id) {
                    PromoCode::where('id', $coupon_id)->decrement('no_of_times');
                }
            }

            /** ================= REWARD POINT DEDUCT ================= */
            // 🔹 existing Laravel method
            $user->decrement('reward_point', $usePoint);
            RewardPointHistory::create([
                'user_id' => $user->id,
                'point' => $usePoint,
                'type' => 'debit',
                'note' => 'Order refund #' . $order->transaction_number,
            ]);

            /** ================= CLEAR CART ================= */
            if (auth()->check()) {
                Cart::where('user_id', $user->id)->delete();
            } else {
                Cart::where('session_id', session('cartSession'))->delete();
            }

            Session::forget(['cart', 'discount', 'coupon']);
            Session::put('order_id', $order->id);

            DB::commit();

            return [
                'status' => true,
            ];

        
    }

}
