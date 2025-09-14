<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function userProfile(){
        return view('user.dashboard.user_profile');
    }
    public function orders(){
        return view('user.dashboard.orders');
    }
    public function editProfile(){
        return view('user.dashboard.edit_profile');
    }
    public function passwordChange(){
        return view('user.dashboard.password_change');
    }
    public function orderDetails(){
        return view('user.dashboard.order_details');
    }
}
