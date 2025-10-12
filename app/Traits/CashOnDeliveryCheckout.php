<?php

namespace App\Traits;

use App\{
    Models\Order,
    Models\Cart,
    Models\Setting,
    Models\TrackOrder,
    Models\ItemVariant,
    Models\OrderDetails,
    Helpers\EmailHelper,
    Helpers\PriceHelper,
    Models\Notification,
};
use App\Helpers\SmsHelper;
use App\Jobs\EmailSendJob;
use App\Models\Item;
use App\Models\PromoCode;
use App\Models\ShippingService;
use App\Models\State;
use App\Models\Variant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

trait CashOnDeliveryCheckout
{

    public function cashOnDeliverySubmit($data)
    {
        // dd($data);
        $user = Auth::user();

        $setting = Setting::first();
        $cart = collect();
        if(auth()->check()) {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
        } else {
            $cart = Cart::where('session_id', session()->get('cartSession'))->get();
        }
        $total_tax = 0;
        $cart_total = 0;
        $total = 0;
        $option_price = 0;
        
        foreach ($cart as $key => $items) {
            $item_variant = ItemVariant::where('id', $items->item_variant_id)->first();
            $total += ($items->item->discount_price + ($item_variant != null ? $item_variant->additional_price : 0)) * $items->quantity;
            $cart_total = $total;
        }
        
    
        
        $discount = [];
        if (Session::has('coupon')) {
            $discount = Session::get('coupon');
        }
        $grand_total = 200 ??($cart_total  + $total_tax);
        $grand_total = $grand_total - ($discount ? $discount['discount'] : 0);
        $total_amount = PriceHelper::setConvertPrice($grand_total);
       
        $orderData['cart'] = json_encode($cart, true);
        $orderData['discount'] = json_encode($discount, true);
        $orderData['shipping'] = "ghjhkgjh";
        $orderData['tax'] = $total_tax;
        $orderData['state_price'] = $cart_total;
        $orderData['shipping_info'] = json_encode(Session::get('shipping_address'), true);
        $orderData['billing_info'] = json_encode(Session::get('billing_address'), true);
        $orderData['payment_method'] = 'Cash On Delivery';
        $orderData['user_id'] = isset($user) ? $user->id : 0;
        $orderData['transaction_number'] = Str::random(10);
        $orderData['currency_sign'] = PriceHelper::setCurrencySign();
        $orderData['currency_value'] = PriceHelper::setCurrencyValue();
        $orderData['payment_status'] = 'Unpaid';
        $orderData['order_status'] = 'Pending';
        // $orderData['variant_id'] = $variant ? $variant->id : null;

        $orderData['user_id'] = 1;

       try {
            $order = Order::create($orderData);

            $new_txn =  $new_txn = 'ORD-' . str_pad(Carbon::now()->format('Ymd'), 4, '0000', STR_PAD_LEFT) . '-' . $order->id;
            $order->transaction_number = $new_txn;
            $order->save();

            //order details entry
            foreach ($cart as $key => $item) {
                $orderDetailsData = [];
                $orderDetailsData['order_id'] = $order->id;
                $orderDetailsData['item_id'] = $item->item_id;
                $orderDetailsData['qty'] = $item->quantity;
                $orderDetailsData['price'] = $item->item->discount_price;
                $item_variant = ItemVariant::where('id', $item->item_variant_id)->first();
                $orderDetailsData['variant_price'] = $item_variant ? $item_variant->additional_price : 0;
                $orderDetailsData['item_variant_id'] = $item->item_variant_id;
                $orderDetailsData['total_price'] = ($item->item->discount_price + ($item_variant ? $item_variant->additional_price : 0)) * $item->quantity;
                
                OrderDetails::create($orderDetailsData);
                
            }

            TrackOrder::create([
                'title' => 'Pending',
                'order_id' => $order->id,
            ]);
       } catch (\Throwable $th) {
        throw $th;
       }


        // PriceHelper::Transaction($order->id, $order->transaction_number, EmailHelper::getEmail(), PriceHelper::OrderTotal($order, 'trns'));
        // PriceHelper::LicenseQtyDecrese($cart);
        // PriceHelper::stockDecrese();
        // Notification::create([
        //     'order_id' => $order->id
        // ]);

        // $emailData = [
        //     'to' => EmailHelper::getEmail(),
        //     'type' => "Order",
        //     'user_name' => isset($user) ? $user->displayName() : Session::get('billing_address')['bill_first_name'],
        //     'order_cost' => $total_amount,
        //     'transaction_number' => $order->transaction_number,
        //     'site_title' => Setting::first()->title,
        // ];

        $setting = Setting::first();
        // if ($setting->is_queue_enabled == 1) {
        //     dispatch(new EmailSendJob($emailData, "template"));
        // } else {
        //     $email = new EmailHelper();
        //     $email->sendTemplateMail($emailData, "template");
        // }
        
        if ($discount) {
            $coupon_id = $discount['code']['id'];
            $get_coupon = PromoCode::findOrFail($coupon_id);
            $get_coupon->no_of_times -= 1;
            $get_coupon->update();
        }
        // if ($setting->is_twilio == 1) {
        //     // message
        //     $sms = new SmsHelper();
        //     $user_number = json_decode($order->billing_info, true)['bill_phone'];
        //     if ($user_number) {
        //         $sms->SendSms($user_number, "'purchase'", $order->transaction_number);
        //     }
        // }

        // clear all cart data
        if (auth()->check()) {
            Cart::where('user_id', auth()->user()->id)->delete();
        } else {
            Cart::where('session_id', session()->get('cartSession'))->delete();
        }

        Session::put('order_id', $order->id);
        Session::forget('cart');
        Session::forget('discount');
        Session::forget('coupon');
        return [
            'status' => true
        ];
    }
}
