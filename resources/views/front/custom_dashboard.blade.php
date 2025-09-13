@extends('master.front')

@section('content')

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 account-sidebar text-right">
      <h5 class="fw-bold my-accountText">MY ACCOUNT</h5>
      <ul class="nav nav-pills nav-stacked" role="tablist">
        <li class="active">
          <a href="{{ route('custom.profile') }}" >My Profile</a>
        </li>
        <li>
          <a href="{{ route('custom.address') }}">Address Book</a>
        </li>
        <li>
          <a href="{{ route('custom.orders') }}">My Orders</a>
        </li>
        <li>
          <a href="#v-pills-wishlist" role="tab" data-toggle="tab">Wishlist</a>
        </li>
        <li>
          <a href="#v-pills-tracker" role="tab" data-toggle="tab">Order Tracker</a>
        </li>
       
        <li>
          <a href="#v-pills-logout" role="tab" data-toggle="tab">Sign Out</a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="col-md-9">
      <div class="tab-content">

        @yield('user_content')

        
      </div>
    </div>
  </div>
</div>

@endsection
