@extends('master.front')
@section('title')
    {{__('Register')}}
@endsection
@section('content')

<div class="main-content">
    <div class="container">
        <div class="main_content">
            <h2 class="main_heading">REGISTRATION</h2>
        </div>

        <div class="additional_info">
            <p class="info">
                <span class="required">*</span>
                <span class="text">Required fields</span>
            </p>
        </div>

        <div class="flex-r login-wrapper">
            <div class="register-text">
                  <form class="flex-c" action="{{route('user.register.submit')}}" method="POST">
                        @csrf
                    <!-- Email -->
                    <div class="input-box">
                        <label for="email">E-mail <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="email" placeholder="{{__('Enter your email')}}" value="{{old('email')}}" name="email" class="btn-disable firstEmail">
                        </div>
                          @error('email')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                    </div>

                    <!-- First Name -->
                    <div class="input-box">
                         <label for="email">First Name <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" placeholder="{{__('Enter your first name')}}" value="{{old('first_name')}}" name="first_name">
                        </div>
                         @error('first_name')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                    </div>

                    <!-- Last Name -->
                    <div class="input-box">
                        <label class="label">Last Name <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" placeholder="{{__('Enter your last name')}}" value="{{old('last_name')}}" name="last_name" id="lastName">
                        </div>
                         @error('last_name')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                    </div>
                    <div class="input-box">
                        <label class="label">{{__('Phone Number')}} <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" placeholder="{{__('Enter your phone number')}}" value="{{old('phone')}}" name="phone" id="reg-phone" value="{{old('phone')}}">
                        </div>
                         @error('phone')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                    </div>
                    {{-- <div class="col-sm-6">
                          <div class="form-group">
                            <label for="reg-phone">{{__('Phone Number')}}*</label>
                            <input class="form-control" name="phone" type="text" placeholder="{{__('Phone Number')}}" id="reg-phone" value="{{old('phone')}}">
                            @error('phone')
                            <p class="text-danger">{{$message}}</p>
                            @endif
                          </div>
                        </div> --}}

                    <!-- Password -->
                    <div class="input-box">
                         <label for="password">Confirm Password <span style="color:red">*</span></label>
                        <div class="flex-r input show_hide_password">
                            <input type="password" id="password" placeholder="{{__('Enter your password')}}"  name="password" required>
                            <a class="show-pass"><i class="fa fa-eye-slash"></i></a>
                        </div>
                        <span class="pass_info">The password should be at least 6 characters long and must contain at least one upper case letter, one lower case letter, a number and a special character (!, @, #, $, %, &, *)</span>
                         @error('password')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                      </div>

                    <div class="input-box">
                         <label for="password">Confirm Password <span style="color:red">*</span></label>
                        <div class="flex-r input show_hide_password">
                            <input type="password" id="password" name="password_confirmation" placeholder="{{__('Enter your confirm password')}}"   required>
                            <a class="show-pass"><i class="fa fa-eye-slash"></i></a>
                        </div>
                         @error('password_confirmation')
                          <p class="message-danger">{{$message}}</p>
                          @endif
                    </div>
                      <input type="text" name="honeypot" id="honeypot" value="" style="display:none;">
                        @if ($setting->recaptcha == 1)
                        <div class="col-lg-12">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            @php
                                $errmsg = $errors->first('g-recaptcha-response');
                            @endphp
                            <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                            @endif
                        </div>
                        @endif


                       <div class="check">
                        Already Have An Account ? <a  class="log-small-text" href="{{ route('user.login') }}">Login Now</a>
                        </div>
                    <!-- Submit -->
                     <button type="submit" class="btn-submit" id="submitBtn" >Create an Account</button>
                </form>
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
                <a href="#"> Create Account with Google </a>
            </div>
            </div>
        </div>
    </div>
</div>

 
@endsection
