@extends('user.dashboard.layout')

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
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{ route('custom.change-password.update') }}" method="POST">
                @csrf
                <div class="field">
                <label for="old_password">Old Password*</label>
                <input type="password" name="old_password" id="old_password" placeholder="Enter your old password" required />
                </div>
                <div class="field">
                <label for="password">New Password *</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter your new password" required />
                </div>
            <div class="field">
                <label for="password_confirmation">Confirm New Password *</label>
                <input type="password" name="password_confirmation" id="password_confirmation" value="" placeholder="Enter your confirm new  password" required />
            </div>
            <div  class="password-tips"><h4 class="tips-title">Password Requirements</h4>
                <ul  class="tips-list"><li >At least 8 characters long</li>
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