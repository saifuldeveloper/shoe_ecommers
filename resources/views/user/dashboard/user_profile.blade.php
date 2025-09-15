@extends('user.dashboard.layout')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-10 col-sm-offset-0 main_card">
        <div class="user_profile_card000">
            <div class="panel-heading">
                <h3 class="panel-title">ACCOUNT INFORMATION</h3>
                <small>This section contains your personal information</small>
                 @if(Session::has('success'))
                <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="panel-body">
                <h4>
                    Personal Information 
                    <a href="{{ route('custom.edit-profile') }}" class="edit_profile_btn pull-right">
                        Edit  <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <strong class="accountInfo">{{ __("First Name") }}</strong>
                        <p class="accountTitle">{{ $user->first_name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">{{ __("First Name") }}</strong>
                        <p class="accountTitle">{{ $user->last_name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">{{ __("Email") }}</strong>
                        <p class="accountTitle">{{ $user->email }}</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">{{ __("Phone Number") }}</strong>
                        <p class="accountTitle">{{ $user->phone }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
