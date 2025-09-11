@extends('master.front')

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
            <div class="login-text">
                <form class="flex-c">
                    <!-- Email -->
                    <div class="input-box">
                        <label for="email">E-mail <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" id="email" class="btn-disable firstEmail">
                        </div>
                    </div>

                    <!-- First Name -->
                    <div class="input-box">
                         <label for="email">First Name <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" id="firstName">
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="input-box">
                        <label class="label">Last Name <span style="color:red">*</span></label>
                        <div class="flex-r input">
                            <input type="text" id="lastName">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-box">
                         <label for="password">Confirm Password <span style="color:red">*</span></label>
                        <div class="flex-r input show_hide_password">
                            <input type="password" id="password" required>
                            <a href="#" class="show-pass"><i class="fa fa-eye-slash"></i></a>
                        </div>
                        <span class="pass_info">The password should be at least 9 characters long and must contain at least one upper case letter, one lower case letter, a number and a special character (!, @, #, $, %, &, *)</span>
                    </div>

                    <div class="input-box">
                         <label for="password">Confirm Password <span style="color:red">*</span></label>
                        <div class="flex-r input show_hide_password">
                            <input type="password" id="password" required>
                            <a href="#" class="show-pass"><i class="fa fa-eye-slash"></i></a>
                        </div>
                    </div>

                    <!-- Submit -->
                     <button type="submit" class="btn-submit" id="submitBtn" >Create an Account</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
