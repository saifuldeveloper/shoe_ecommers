@extends('master.front')
@section('title')
    {{__('Cart')}}
@endsection
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@php
    $cart = collect();
    if(auth()->check()) {
        $cart = App\Models\Cart::where('user_id', auth()->user()->id)->get();
    } else {
        $cart = App\Models\Cart::where('session_id', session()->get('cartSession'))->get();
    }
@endphp
@section('content')
<div class="mt-4" style="margin-top: 50px"></div>

  @if($cart && $cart->count() > 0)
  <div class="padding-bottom-3x mb-1">

    <!-- Shopping Cart-->
    <div id="view_cart_load">
        @include('includes.cart')
    </div>

  </div>
  @else
  <div class="padding-bottom-3x mb-1">
    <div class="card text-center">
      <div class="card-body padding-top-2x">
        <h3 class="card-title">{{__('Your shopping cart is empty.')}}</h3>
       <a class="btn btn-outline-primary m-4" href="{{route('front.product.collection.all')}}"><i class="icon-package pr-2"></i>{{__('View our products')}}</a></div>
      </div>
    </div>
  @endif
  <!-- Page Content-->
<div class="mt-4" style="margin-top: 50px"></div>

@endsection

