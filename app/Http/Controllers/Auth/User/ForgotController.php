<?php

namespace App\Http\Controllers\Auth\User;

use App\{
  Models\User,
  Http\Controllers\Controller,
  Repositories\Both\ForgotRepository
};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class ForgotController extends Controller
{

  /**
   * Constructor Method.
   *
   * @param  \App\Repositories\Both\ForgotRepository $repository
   *
   */
  public function __construct(ForgotRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('guest');
  }

  /**
   * Show the form for requesting forgot password.
   *
   * @return \Illuminate\Http\Response
   */
  public function showForm()
  {
    return view('user.auth.forgotPassword');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function sendSmsOtp(Request $request)
  {
    $request->validate([
      'phone' => 'required|exists:users,phone'
    ]);

    $otp = rand(100000, 999999);

    DB::table('password_resets')->updateOrInsert(
      ['phone' => $request->phone],
      [
        'otp' => $otp,
        'expires_at' => now()->addMinutes(5),
        'created_at' => now(),
        'updated_at' => now(),
      ]
    );

    Http::asForm()->post(env('SMS_PROVIDER_URL'), [
      'api_key' => env('SMS_API_KEY'),
      'sender_id' => env('SMS_SENDER_ID'),
      'msg' => 'Your Forgot Password OTP is: ' . $otp, 
      'to' => $request->phone,                         
    ]);
    return back()->with([
      'success' => 'OTP sent successfully',
      'phone' => $request->phone
    ]);
  }


  public function verifyOtp(Request $request)
  {
    $request->validate([
      'phone' => 'required|exists:password_resets,phone',
      'otp' => 'required'
    ]);
    $otpData = DB::table('password_resets')
      ->where('phone', $request->phone)
      ->where('otp', $request->otp)
      ->where('expires_at', '>=', now())
      ->first();

    if (!$otpData) {
      return back()->with('error', 'Invalid or expired OTP');
    }
    session()->forget('phone');
    session(['reset_phone' => $request->phone]);

    return redirect()->route('user.password.reset.form')


      ->with('success', 'OTP verified successfully');
  }


  public function resetForm()
  {
    return view('user.auth.changepass');
  }

  // public function forgot(Request $request)
  // {
  //   if ($request->otp) {

  //   } else {
  //     // STEP 1: Send OTP
  //     $request->validate([
  //       'phone' => 'required'
  //     ]);

  //     // generate otp
  //     $otp = rand(100000, 999999);

  //     // save otp in DB or session
  //     session(['otp' => $otp]);

  //     // send sms here

  //     return back()->with('success', 'OTP sent successfully');
  //   }
  // }


  // public function forgot(Request $request)
  // {
  //   $request->validate([
  //     'email' => 'required|email'
  //   ]);

  //   if ($data = User::whereEmail($request->email)->first()){
  //     $this->repository->forgot($data,$request,'user');
  //     Session::flash('success',__('We Have Sent a Link To Your Account!. Please Check Your Email.'));
  //     return redirect()->back();
  //   }
  //   else{
  //     Session::flash('error',__('No Account Found With This Email.'));
  //     return redirect()->back();
  //   }
  // }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  string  $token
   * @return \Illuminate\Http\Response
   */
  public function showChangePassForm($token)
  {
    if ($token) {
      if (User::whereEmailToken($token)->exists()) {
        return view('user.auth.changepass', compact('token'));
      }
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function changepass(Request $request)
  {


    // $data = User::whereEmailToken($request->file_token)->first();

    // $resp = $this->repository->updatePassword($data, $request, 'user');
    // if ($resp['status']) {
    //   return redirect($resp['redurect_url'])->withSuccess($resp['message']);
    // } else {
    //   return redirect()->back()->withErrors($resp['message']);
    // }


    $request->validate([
      'new_password' => 'required|min:6',
      'renew_password' => 'required|min:6|same:new_password', 
    ]);

    User::where('phone', $request->phone)->update([
      'password' => Hash::make($request->new_password),
    ]);
    session()->forget('reset_phone');
    return redirect()->route('user.login')
      ->with('success', 'Password changed successfully');
  }

}
