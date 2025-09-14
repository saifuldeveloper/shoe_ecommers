@extends('master.front')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 account-sidebar text-right">
      <h5 class="fw-bold my-accountText">MY ACCOUNT</h5>
      <ul class="nav nav-pills nav-stacked" role="tablist">
        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('custom.profile') }}">My Profile</a></li>
        <li><a href="{{ route('custom.orders') }}">My Orders</a></li>
        <li><a href="{{ route('custom.change-password') }}">Change Password</a></li>
        <li><a href="{{ route('user.logout') }}">Sign Out</a></li>
      </ul>
    </div>

    <!-- Content -->
    <div class="col-md-9">
      
        @yield('user_content')
    </div>
  </div>
</div>
@endsection
