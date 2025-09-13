<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
         return view('front.custom_dashboard');
    }
    public function userProfile(){
        return view('front.user_profile');
    }
    public function userAddress(){
        return view('front.address');
    }
    public function orders(){
        return view('front.orders');
    }
    public function editProfile(){
        return view('front.edit_profile');
    }
    public function passwordChange(){
        return view('front.password_change');
    }
}
