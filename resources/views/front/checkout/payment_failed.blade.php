@extends('master.front')

@section('title')
    {{ __('Payment Failed') }}
@endsection

@section('content')
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('front.index') }}">{{ __('Home') }}</a></li>
                    <li class="separator"></li>
                    <li>{{ __('Payment Failed') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="card text-center">
            <div class="card-body padding-top-2x">
                <h3 class="card-title text-danger"><i class="fas fa-times-circle"></i> {{ __('Payment Failed') }}</h3>
                <p class="card-text">{{ __('Unfortunately, your payment was not successful.') }}</p>
                <p class="card-text">{{ __('Please try again or contact support if the issue persists.') }}</p>
                <div class="padding-top-1x padding-bottom-1x">
                    <a class="btn btn-outline-secondary m-2" href="{{ route('front.index') }}">
                        <i class="icon-home pr-2"></i> {{ __('Return to Home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
