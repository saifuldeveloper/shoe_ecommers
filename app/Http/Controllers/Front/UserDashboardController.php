<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        return view('user.dashboard.orders');
    }

    public function passwordChange(){
        return view('user.dashboard.password_change');
    }
    public function orderDetails(){
        return view('user.dashboard.order_details');
    }
}
