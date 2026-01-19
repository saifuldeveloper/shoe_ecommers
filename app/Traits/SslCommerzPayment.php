<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Setting;
use App\Models\Currency;
use App\Models\TrackOrder;
use App\Models\ItemVariant;
use Illuminate\Support\Str;
use App\Helpers\PriceHelper;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


trait SslCommerzPayment
{


    public function sslCommerzSubmit(array $data): array
    {

        $user = Auth::user();

        $cart = auth()->check()
            ? Cart::where('user_id', $user->id)->get()
            : Cart::where('session_id', session()->get('cartSession'))->get();

        // Calculate total
        $total = 0;
        foreach ($cart as $item) {
            $item_variant = ItemVariant::find($item->item_variant_id);

            $total += ($item->item->discount_price + ($item_variant?->additional_price ?? 0)) * $item->quantity;
        }

   
        // Apply discount
        $discount = Session::get('coupon', []);
        $grand_total = $total - ($discount['discount'] ?? 0);
        $total_amount = PriceHelper::setConvertPrice($grand_total) + $data['shipping_charge'];

  
        // Generate txn id
        $txnid = "SSLCZ_TXN_" . uniqid();

        // Create order
        $orderData = [
            'cart' => $cart->toJson(),
            'discount' => json_encode($discount, true),
            'shipping' => $data['shipping_charge'] ?? 0,
            'tax' => 0,
            'state_price' => $data['shipping_charge'] ?? 0,
            'shipping_info' => json_encode(Session::get('shipping_address'), true),
            'billing_info' => json_encode(Session::get('billing_address'), true),
            'payment_method' => 'SSLCommerz',
            'order_status' => 'Pending',
            'user_id' => $user->id ?? 0,
            'transaction_number' => Str::random(10),
            'currency_sign' => PriceHelper::setCurrencySign(),
            'currency_value' => PriceHelper::setCurrencyValue(),
            'txnid' => $txnid,
        ];

        try {
            $order = Order::create($orderData);

            $order->transaction_number = 'ORD-' . str_pad(Carbon::now()->format('Ymd'), 4, '0000', STR_PAD_LEFT) . '-' . $order->id;
            $order->save();

            // Order details
            foreach ($cart as $item) {
                $item_variant = ItemVariant::find($item->item_variant_id);
                OrderDetails::create([
                    'order_id' => $order->id,
                    'item_id' => $item->item_id,
                    'qty' => $item->quantity,
                    'price' => $item->item->discount_price,
                    'variant_price' => $item_variant?->additional_price ?? 0,
                    'item_variant_id' => $item->item_variant_id,
                    'total_price' => ($item->item->discount_price + ($item_variant?->additional_price ?? 0)) * $item->quantity,
                ]);
            }

            TrackOrder::create([
                'title' => 'Pending',
                'order_id' => $order->id,
            ]);

        } catch (\Throwable $th) {
            throw $th;
        }

        // Prepare payload
        $payload = [
            'store_id' => config('services.sslcommerz.store_id'),
            'store_passwd' => config('services.sslcommerz.store_password'),
            'total_amount' => $total_amount,
            'currency' => 'BDT',
            'tran_id' => $txnid,

            'success_url' => route('payment.ssl.success'),
            'fail_url' => route('payment.ssl.fail'),
            'cancel_url' => route('payment.ssl.cancel'),

            'cus_name' => $data['ship_name'],
            'cus_email' => $data['ship_email'] ?? ($user->email ?? 'no@mail.com'),
            'cus_add1' => $data['ship_address1'],
            'cus_city' => $data['ship_city'] ?? 'Dhaka',
            'cus_phone' => $data['ship_phone'] ?? ($user->phone ?? '0123456789'),
            'cus_country' => "Bangladesh",

            'shipping_method' => 'NO',
            'product_name' => 'Order Payment',
            'product_category' => 'General',
            'product_profile' => 'general',
        ];

        $response = Http::withOptions([
            'verify' => config('services.sslcommerz.verify'),
        ])
            ->asForm()
            ->post($this->sslCommerzUrl(), $payload);

        if (!$response->successful()) {
            return [
                'status' => false,
                'message' => 'SSLCommerz connection failed'
            ];
        }

        $data = $response->json();

        if (!isset($data['GatewayPageURL'])) {
            return [
                'status' => false,
                'message' => 'Invalid SSLCommerz response'
            ];
        }

        return [
            'status' => true,
            'redirect_url' => $data['GatewayPageURL'],
            'tran_id' => $txnid,
        ];
    }

    private function sslCommerzUrl(): string
    {
        return config('services.sslcommerz.url');
    }

}
