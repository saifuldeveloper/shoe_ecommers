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
         {{-- @include('includes.user_sitebar') --}}
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <div class="row u-d-d">
                    <div class="col-md-6 mb-4">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('All Order')}}</p>
                                <h4><b>{{$allorders}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Completed Order')}}</p>
                                <h4><b>{{$delivered}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Processing Order')}}</p>
                                <h4><b>{{$progress}}</b></h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Canceled Order')}}</p>
                                <h4><b>{{$canceled}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Pending Order')}}</p>
                                <h4><b>{{$pending}}</b></h4>
                            </div>
                        </div>
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
