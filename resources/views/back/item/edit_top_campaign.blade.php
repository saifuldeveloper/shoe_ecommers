@extends('master.back')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/back/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/back/css/datepicker.css')}}">
@endsection
@section('content')

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="mb-0 bc-title"><b>{{ __('Edit Campaign Offer') }}</b></h3>
                        <div class="right">
                            <a href="{{ route('back.campaign.offer.index') }}" class="btn btn-info btn-sm d-inline-block">
                                {{ __('Back') }}
                            </a>
                         
                        </div>
                    </div>
        
        </div>
    </div>

    {{-- Create Table Btn --}}
   <form class="admin-form tab-form"
      action="{{ route('back.campaign.offer.update',$data->id) }}"
      method="POST">
    @method('PUT')
    @csrf

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="campaign_title">{{ __('Campaign Title') }} *</label>
                        <input type="text"
                               name="campaign_title"
                               class="form-control"
                               id="campaign_title"
                               placeholder="Enter Campaign Title"
                               value="{{ $data->campaign_title }}"
                               required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>



</div>

</div>


@endsection
@section('scripts')
    <script type="" src="{{asset('assets/back/js/select2.js')}}"></script>
    <script>
        $('#basic').select2({
			theme: "bootstrap"
		});
    </script>
@endsection