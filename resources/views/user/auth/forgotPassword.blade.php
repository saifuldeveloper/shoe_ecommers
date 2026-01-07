@extends('master.front')

@section('title', __('Password Reset'))

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center forgot-wrapper" style="margin-bottom: 10px;">
            <div class="col-lg-5 col-md-7 col-sm-10">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- STEP 1: PHONE FORM --}}
                @if (!session('phone'))
                        <form method="POST" action="{{ route('user.sendOtp.submit') }}" class="py-5 my-5" style="margin-top: 30px;">
                            @csrf
                            <div class="mb-3 d-flex">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="01XXXXXXXXX"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <small class="text-danger d-block mt-1">
                                        {{ $message }}
                                    </small>
                                @enderror

                                <button type="submit" class="btn btn-danger w-100 mt-4" style="margin-top: 10px; padding:10px;">
                                    Send OTP
                                </button>
                            </div>
                            <div>
                                
                            </div>
                        </form>

                @endif

                {{-- STEP 2: OTP FORM --}}
                @if (session('phone'))
                    <form method="POST" action="{{ route('user.otp.verify') }}" class="mt-4" style="margin-top: 30px;">
                        @csrf
                        <input type="hidden" name="phone" value="{{ session('phone') }}">
                        <div class="mb-3">
                            <label class="form-label">Enter OTP</label>
                            <input type="text" name="otp" class="form-control" placeholder="Enter 6 digit OTP"
                                required>
                            @error('otp')
                                <small class="text-danger d-block mt-1">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <button type="submit"class="btn btn-danger w-100 mt-4" style="margin-top: 10px; padding:10px;">
                            Verify OTP
                        </button>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection
