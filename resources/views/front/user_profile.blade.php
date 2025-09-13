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
                    <button class="btn btn-default btn-xs pull-right">
                        <span class="glyphicon glyphicon-pencil"></span> Edit
                    </button>
                </h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <strong>First Name</strong>
                        <p>Alamin</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Last Name</strong>
                        <p>islam</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Email</strong>
                        <p>alamincsetpi@gmail.com</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Phone Number</strong>
                        <p>01738022592</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Gender</strong>
                        <p>N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Date of Birth</strong>
                        <p>2001-09-12</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Anniversary</strong>
                        <p>N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Number of Family Members</strong>
                        <p>N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Number of Kids</strong>
                        <p>N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Preferred Brand</strong>
                        <p>N/A</p>
                    </div>
                    <div class="col-sm-6">
                        <strong>Preferred Apex Store</strong>
                        <p>N/A</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
