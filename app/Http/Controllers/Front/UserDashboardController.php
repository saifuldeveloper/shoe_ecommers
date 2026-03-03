<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscriber;

class UserDashboardController extends Controller
{
    public function userProfile(){
        $user = Auth::user();
        return view('user.dashboard.user_profile',[ 'user' => $user,]);
    }
    public function editProfile()
    {
        $user = Auth::user();
        $check_newsletter = Subscriber::where('email',$user->email)->exists();
        return view('user.dashboard.edit_profile',[ 'user' => $user, 'check_newsletter' => $check_newsletter,]
    );
    }
    public function orders(){
        $orders = Order::whereUserId(Auth::user()->id)->latest('id')->get();
        return view('user.dashboard.orders', compact('orders'));
    }

    public function passwordChange(){
        return view('user.dashboard.password_change');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = Auth::user();

        if (\Hash::check($request->old_password, $user->password)) {
            $user->password = \Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'The old password does not match our records.');
        }
    }
    public function orderDetails($id){
        $user = Auth::user();
        $order = Order::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        $cart = json_decode($order->cart, true);
        $shipping = json_decode($order->shipping_info, true);
        $billing = json_decode($order->billing_info, true);
        return view('user.dashboard.order_details', compact('user', 'order', 'cart', 'shipping', 'billing'));
    }
}
