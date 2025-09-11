@extends('master.front')

@section('content')
<div class="login-main-content">
<div class="flex-r">
  <div class="flex-r">
    <div class="login-text">
      <h1>SIGN IN TO YOUR ACCOUNT</h1>
      <p>Welcome back! 
      </br>
      If you already registered at store, Kindly create an account at website first.
      </p>
      <form class="flex-c">
        <div class="input-box">
          <label for="email">E-mail <span style="color:red">*</span></label>
          <div class=" flex-r input">
            <input type="text"  autocomplete="off">
          </div>
        </div>

        <div class="input-box">
          <label for="password">Password <span style="color:red">*</span></label>
          <div class="flex-r input show_hide_password">
            <input type="password" id="password" autocomplete="off">
             <a href="#" class="show-pass"><i class="fa fa-eye-slash"></i></a>
          </div>
        </div>

        <div class="check">
          <a href="#recover">Forgot Password?</a>
        </div>
        
        <input class="login-submit" type="submit" value="Log In">
      </form>
    </div>
  </div>
  
  <div class="login-info">
    <h2 class="additional-info">DON'T HAVE A AVIJATRY ACCOUNT?</h2>
    <p class="additional_text">Create an account and Register yourself as AVIJATRY member! AVIJATRY members can enjoy exclusive benefits.</p>
    <ul class="additional_points">
      <li><span style="color:red;">✓ </span> &nbsp; Receive 50 points on free signup</li>
      <li><span style="color:red;">✓ </span> &nbsp; Get upto 100 bonus points for profile update</li>
      <li><span style="color:red;">✓ </span> &nbsp; Birthday Treat</li>
      <li><span style="color:red;">✓ </span> &nbsp; Earn 1 Point with every BDT 100 purchase</li>
      <li><span style="color:red;">✓ </span> &nbsp; Bonus points after every even number purchase worth BDT 100+</li>
    </ul>

    <div class="btn_wrapper">
      <button class="login-submit"><a href="{{ url('custom-register') }}">CREATE A BATA ACCOUNT</a></button>
    </div>
    
  </div>
</div>
</div>

@endsection