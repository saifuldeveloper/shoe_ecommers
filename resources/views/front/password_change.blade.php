@extends('front.custom_dashboard')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-11 col-sm-offset-0">
        <div class="user_profile_card000">
            <div class="panel-body">
                <h4> Password Information</h4>&nbsp;
                <p>Update your account password for better security</p>
                <hr>
             
            <div class="form-wrapper">
            <form>
                <div class="field">
                <label for="firstName">Old Password*</label>
                <input type="text" id="firstName"  placeholder="Enter your old password" />
                </div>
                <div class="field">
                <label for="lastName">New Password *</label>
                <input type="text" id="lastName" value="" placeholder="Enter your mew password"/>
                </div>
            <div class="field">
                <label for="email">Confirm New Password *</label>
                <input type="email" id="email" value="" placeholder="Enter your confirm new  password"/>
            </div>
            <div  class="password-tips"><h4 class="tips-title">Password Requirements</h4>
                <ul  class="tips-list"><li >At least 8 characters long</li>
                    <li>Include uppercase and lowercase letters</li>
                    <li>Include at least one number</li>
                    <li>Include at least one special character</li>
                </ul>
            </div>
            <div class="footer">
                <button type="submit" class="save-btn">Update Password</button>
            </div>
            </form>
            </div>
            </div>

            </div>
        </div>
    </div>
</div>

@endsection