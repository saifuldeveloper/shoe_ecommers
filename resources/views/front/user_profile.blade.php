@extends('front.custom_dashboard')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-10 col-sm-offset-0 main_card">
        <div class="user_profile_card000">
            <div class="panel-heading">
                <h3 class="panel-title">ACCOUNT INFORMATION</h3>
                <small>This section contains your personal information</small>
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
                        <strong class="accountInfo">First Name</strong>
                        <p class="accountTitle">Alamin</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Last Name</strong>
                        <p class="accountTitle">islam</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Email</strong>
                        <p class="accountTitle">alamincsetpi@gmail.com</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Phone Number</strong>
                        <p class="accountTitle">01738022592</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Gender</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Date of Birth</strong>
                        <p class="accountTitle">2001-09-12</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Anniversary</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Number of Family Members</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Number of Kids</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Preferred Brand</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong class="accountInfo">Preferred Apex Store</strong>
                        <p class="accountTitle">N/A</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
