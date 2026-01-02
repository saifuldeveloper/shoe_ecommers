@extends('master.front')
@section('title')
    {{__('Dashboard')}}
@endsection
@section('content')

<!-- Page Title-->

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
     
<div class="container  padding-bottom-3x mb-1">
  <div class="row">
    <div class="stats-container">
        <div class="stat-card">
        <div class="icon green"><i class="fa fa-shopping-cart"></i></div>
        <div class="stat-info">
            <h4>Total Orders</h4>
            <p>{{$allorders}}</p>
        </div>
        </div>

        <div class="stat-card">
        <div class="icon green"><i class="fa fa-hourglass-half"></i></div>
        <div class="stat-info">
            <h4>Processing Orders</h4>
            <p>{{$progress}}</p>
        </div>
        </div>

        <div class="stat-card">
        <div class="icon green"><i class="fa fa-truck"></i></div>
        <div class="stat-info">
            <h4>Delivered Orders</h4>
            <p>{{$delivered}}</p>
        </div>
        </div>

        <div class="stat-card">
        <div class="icon green"><i class="fa fa-times-circle"></i></div>
        <div class="stat-info">
            <h4>Canceled Orders</h4>
            <p>{{$canceled}}</p>
        </div>
        </div>

        <div class="stat-card">
        <div class="icon green"><i class="fa fa-shopping-cart"></i></div>
        <div class="stat-info">
            <h4>Pending Order</h4>
            <p>{{$pending}}</p>
        </div>
        </div>  

         <div class="stat-card">
        <div class="icon green"><i class="fa fa-shopping-cart"></i></div>
        <div class="stat-info">
            <h4>Reward Point</h4>
          <p>{{ auth()->user()->reward_point }}</p>
        </div>
        </div>  

    </div>
  </div>
</div>



        @yield('user_content')
    </div>
  </div>
</div>
@endsection
