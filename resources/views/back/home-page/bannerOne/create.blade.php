@extends('master.back')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/back/css/select2.css') }}">
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="container-fluid">

            <div class="tab-pane fade show active" id="v-pills-t9" role="tabpanel">

                <form class="admin-form" action="{{ route('back.first.home.page.store') }}" method="POST" enctype="multipart/form-data">

                    @include('alerts.alerts')
                    @csrf

                    {{-- IMAGE FIELD --}}
                    <div class="form-group">
                        <label>{{ __('Image') }} *</label>

                        <input 
                            type="file" 
                            name="banner_first" 
                            class="form-control"
                            id="banner_first"
                            accept="image/*">

                        <br>

                        <img
                            id="banner_preview"
                            class="admin-img"
                            src="{{ isset($hero_banner['img1']) ? url('/storage/banner/'.$hero_banner['img1']) : url('/assets/images/placeholder.png') }}"
                            style="max-height:150px"
                            alt="Preview">

                        <br>

                        <span class="mt-1">{{ __('Image Size Should Be 1688 x 338.') }}</span>
                    </div>

                    {{-- URL FIELD --}}
                    <div class="form-group">
                        <label>{{ __('URL') }} *</label>
                        <input 
                            type="text" 
                            name="url_first" 
                            class="form-control"
                            placeholder="{{ __('Enter Url') }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">
                            {{ __('Submit') }}
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const input = document.getElementById("banner_first");
    const preview = document.getElementById("banner_preview");

    input.addEventListener("change", function (e) {
        const file = e.target.files[0];

        if (!file) return;

        const reader = new FileReader();

        reader.onload = function (event) {
            preview.src = event.target.result;
        };

        reader.readAsDataURL(file);
    });

});
</script>

@endsection
