@extends('master.front')
@section('title')
    {{__('Login')}}
@endsection
@section('content')
<div class="login-main-content">
<div class="flex-r login_small_device">
  <div class="flex-r">
    <div class="login-text">
    @if(Session::has('success'))
      <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
     @endif </br>
      <h1>SIGN IN TO YOUR ACCOUNT</h1>
      <p>Welcome back! 
      </br>
      If you already registered at store, Kindly create an account at website first.
      </p>
        <form class="flex-c" method="post" action="{{route('user.login.submit')}}">
            @csrf
              @error('credentials')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="input-box">
          <label for="email">E-mail <span style="color:red">*</span></label>
          <div class=" flex-r input">
            <input type="email"  name="login_email" autocomplete="off" placeholder="{{ __('Enter your email') }}" value="{{old('login_email')}}">
          </div>
          @error('login_email')
              <p class="message-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="input-box">
          <label for="password">Password <span style="color:red">*</span></label>
          <div class="flex-r input show_hide_password">
            <input type="password" name="login_password"  id="password" placeholder="{{ __('Enter your password') }}" autocomplete="off">
             <a  class="show-pass"><i class="fa fa-eye-slash"></i></a>
          </div>
          @error('login_password')
              <p class="message-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="check">
          <a href="{{ route('user.forgot') }}">Forgot Password?</a>
        </div>
        <input class="login-submit" type="submit" value="Log In">
      </form>
    @if($setting->google_check == 1)
      <div class="mt-6"><div class="orText">Or</div></div>
      <div class="social--login-btn">
            <svg
              transform="scale(0.8)"
              xmlns="http://www.w3.org/2000/svg"
              height="90%"
              width="7%"
              fit=""
              preserveAspectRatio="xMidYMid meet"
              focusable="false"
            >
              <path
                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                fill="#4285F4"
              ></path>
              <path
                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                fill="#34A853"
              ></path>
              <path
                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                fill="#FBBC05"
              ></path>
              <path
                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                fill="#EA4335"
              ></path>
              <path d="M1 1h22v22H1z" fill="none"></path>
            </svg>
    
              <a href="{{ route('social.provider', 'google') }}"> Login with Google </a>
          </div>
            @endif
    </div>
  </div>
  
  <div class="login-info login_left_info">
    <h2 class="additional-info">DON'T HAVE A AVIJATRY ACCOUNT?</h2>
    <p class="additional_text">Create an account and Register yourself as AVIJATRY member! AVIJATRY members can enjoy exclusive benefits.</p>
    <ul class="additional_points">
      <li><span style="color:red;">✓ </span> &nbsp; Receive 50 points on free signup</li>
      <li><span style="color:red;">✓ </span> &nbsp; Get upto 100 bonus points for profile update</li>
      <li><span style="color:red;">✓ </span> &nbsp; Birthday Treat</li>
      <li><span style="color:red;">✓ </span> &nbsp; Earn 1 Point with every BDT 100 purchase</li>
      <li><span style="color:red;">✓ </span> &nbsp; Bonus points after every even number purchase worth BDT 100+</li>
    </ul>

    <div class="btn_wrapper btn_createAccount">
      <button class="login-submit"><a href="{{ route("user.register") }}">CREATE AN AVIJATRY ACCOUNT</a></button>
    </div>
    
  </div>
</div>
</div>

@endsection
