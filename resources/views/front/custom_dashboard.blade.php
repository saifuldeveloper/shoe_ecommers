@extends('master.front')

@section('content')
@push('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 account-sidebar">
      <h5 class="fw-bold text-end my-accountText">MY ACCOUNT</h5>
      <div class="nav flex-column nav-pills nav-pills-item text-end" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab">My Profile</button>
        <button class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-address" type="button" role="tab">Address Book</button>
        <button class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab">My Orders</button>
        <button class="nav-link" id="v-pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wishlist" type="button" role="tab">Wishlist</button>
        <button class="nav-link" id="v-pills-tracker-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tracker" type="button" role="tab">Order Tracker</button>
        <button class="nav-link" id="v-pills-rewards-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rewards" type="button" role="tab">My Reward Points</button>
        <button class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab">Sign Out</button>
      </div>
    </div>

    <!-- Content -->
    <div class="col-md-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <h3>My Profile</h3>
          <p>This section contains your personal profile information.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
          <h3>Address Book</h3>
          <p>Manage your saved addresses here.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
          <h3>Order History</h3>
          <p>There are no previous orders.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
          <h3>Wishlist</h3>
          <p>Your saved products will appear here.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-tracker" role="tabpanel" aria-labelledby="v-pills-tracker-tab">
          <h3>Order Tracker</h3>
          <p>Track your recent orders.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-rewards" role="tabpanel" aria-labelledby="v-pills-rewards-tab">
          <h3>My Reward Points</h3>
          <p>You currently have 0 reward points.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">
          <h3>Sign Out</h3>
          <p>Click below to log out from your account.</p>
          <button class="btn btn-danger">Logout</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
