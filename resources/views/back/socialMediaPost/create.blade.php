@extends('master.back')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Create Social Media Post') }}</b></h3>
                <a class="btn btn-primary btn-sm" href="{{ route('back.socialmediapost.index') }}">
                    <i class="fas fa-chevron-left"></i> {{ __('Back') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <form class="admin-form" action="{{ route('back.socialmediapost.store') }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf

                                @include('alerts.alerts')

                                {{-- Image --}}
                                <div class="form-group">
                                    <label for="image">{{ __('Set Image') }} *</label>
                                    <br>
                                    <img class="admin-img" src="{{ url('/assets/images/placeholder.png') }}"
                                        alt="No Image Found">
                                    <br>
                                    <span class="mt-1">{{ __('Recommended size: 200 x 200 px') }}</span>
                                </div>

                                <div class="form-group position-relative">
                                    <label class="file">
                                        <input type="file" accept="image/*" class="upload-photo" name="photo" id="file"
                                            aria-label="File browser example">
                                        <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                    </label>
                                </div>

                                {{-- URL --}}
                                <div class="form-group">
                                    <label for="url">{{ __('Post URL') }} *</label>
                                    <input type="text" name="url" class="form-control" id="url"
                                        placeholder="{{ __('Enter Social Media Post URL') }}" value="{{ old('url') }}">
                                </div>

                                {{-- Submit --}}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary">{{ __('Submit') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection