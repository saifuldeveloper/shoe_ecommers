@extends('master.front')
@push('css')
  <style>

  </style>
@endpush

@section('title')
    {{ __('Password Reset') }}
@endsection
@section('content')
<div class="container" style="margin-top: 35px;">
    <div class="row justify-content-center align-items-center forgot-wrapper" >
        <div class="col-lg-5 col-md-7 col-sm-10">

            <div class="card shadow-sm">
                <div class="card-body p-4">

                    <h4 class="text-center mb-4">{{ __('Change Password') }}</h4>

                    {{-- Session / Validation Messages --}}
                    @include('alerts.alerts')

                    <form action="{{ route('user.change.password') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="new_password" class="form-label">
                                {{ __('New Password') }}
                            </label>
                            <input
                                id="new_password"
                                name="new_password"
                                type="password"
                                class="form-control"
                                placeholder="New Password"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="renew_password" class="form-label">
                                {{ __('Re-Type New Password') }}
                            </label>
                            <input
                                id="renew_password"
                                name="renew_password"
                                type="password"
                                class="form-control"
                                placeholder="Re-Type New Password"
                                required
                            >
                        </div>

                       <input type="hidden" name="phone" value="{{ session('reset_phone') }}">

                        <div class="d-grid mt-4" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-primary" >
                                {{ __('Change Password') }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
