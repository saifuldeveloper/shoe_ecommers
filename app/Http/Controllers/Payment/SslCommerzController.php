<?php

namespace App\Http\Controllers\Payment;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\State;
use App\Models\Setting;
use App\Models\Currency;
use App\Models\PromoCode;
use App\Helpers\SmsHelper;
use App\Jobs\EmailSendJob;
use App\Models\TrackOrder;
use App\Models\ItemVariant;
use Illuminate\Support\Str;
use App\Helpers\EmailHelper;
use App\Helpers\PriceHelper;
use App\Models\Notification;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\PaymentSetting;
use App\Models\ShippingService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Front\CheckoutController;

class SslCommerzController extends Controller
{



    public function success(Request $request)
    {
        $input = $request->all();
        $order = Order::where('txnid', $input['tran_id'])->first();
        if (!$order || $input['status'] != 'VALID') {
            return redirect()->route('front.checkout.cancle');
        }
        // Update order payment status
        $order->payment_status = 'Paid';
        // Update transaction number if needed
        $order->transaction_number = 'ORD-' . str_pad(Carbon::now()->format('Ymd'), 4, '0000', STR_PAD_LEFT) . '-' . $order->id;
        $order->save();
        // Track order as Paid
        TrackOrder::create([
            'title' => 'Paid',
            'order_id' => $order->id,
        ]);

        // Send transaction email/notification
        PriceHelper::Transaction(
            $order->id,
            $order->transaction_number,
            EmailHelper::getEmail(),
            PriceHelper::OrderTotal($order, 'trns')
        );

        Notification::create([
            'order_id' => $order->id
        ]);

        // Apply coupon if used
        if (Session::has('coupon')) {
            $discount = Session::get('coupon');
            $coupon = PromoCode::find($discount['code']['id']);
            if ($coupon && $coupon->no_of_times > 0) {
                $coupon->decrement('no_of_times');
            }
            Session::forget('coupon');
            Session::forget('discount');
        }

        // Clear cart
        if (auth()->check()) {
            Cart::where('user_id', auth()->user()->id)->delete();
        } else {
            Cart::where('session_id', session()->get('cartSession'))->delete();
        }

        Session::put('order_id', $order->id);
        Session::forget('cart');

        return redirect()->route('front.checkout.success');
    }


    public function fail(Request $request)
    {
        Session::forget('ssl_tran_id');
        Session::forget('checkout_input');

        return redirect()->route('front.checkout.cancle');
    }

    public function cancel(Request $request)
    {
        Session::forget('ssl_tran_id');
        Session::forget('checkout_input');

        return redirect()->route('front.checkout.cancle');
    }
}
