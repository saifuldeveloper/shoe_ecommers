@extends('master.front')
@push('css')
  <style>

  </style>
@endpush

@section('title')
    {{ __('Password Reset') }}
@endsection

@section('content')

<div class="container">
 
    <div class="row justify-content-center align-items-center forgot-wrapper">
        <div class="col-lg-5 col-md-7 col-sm-10">
                @if(Session::has('success'))
                <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif </br>

                @if(Session::has('error'))
                <div class="alert alert-error">
                        {{ Session::get('error') }}
                    </div>
                @endif </br>
            <form class="card shadow-sm" method="POST" action="{{ route('user.forgot.submit') }}">
                @csrf

                <div class="card-body p-4">
                    <h4 class="text-center mb-5">
                        {{ __('Forgot your password?') }}
                    </h4>

                    <div class="form-group mb-3">
                        <label for="email-for-pass" class="form-label">
                            {{ __('Enter your email address') }}
                        </label>

                        <input
                            class="form-control"
                            type="email"
                            name="email"
                            id="email-for-pass"
                            placeholder="{{ __('Enter your email address') }}"
                            value="{{ old('email') }}"
                            required
                        >

                        @error('email')
                            <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror

                        <small class="text-muted d-block mt-2">
                            {{ __('Type in the email address you used when you registered with our website') }}
                        </small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button class="btn btn-primary btn-sm px-4" type="submit">
                            {{ __('Get New Password') }}
                        </button>

                        <a href="{{ route('user.login') }}" class="btn btn-outline-primary btn-sm px-4">
                            {{ __('Login') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
