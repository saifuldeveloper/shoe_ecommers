
@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Update District') }}</b> </h3>
                <a class="btn btn-primary  btn-sm" href="{{route('back.districts.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="{{ route('back.stores.update',$store->id) }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
									@include('alerts.alerts')

									<div class="form-group">
										<label for="district_select">{{ __('Select District') }} *</label>
										<select name="district_id" id="district_select" class="form-control">
											@foreach($districts as $dist)
												<option value="{{ $dist->id }}" {{ $store->district_id == $dist->id ? 'selected' : '' }}>
													{{ $dist->name }}
												</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="name">{{ __('Name') }} *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ $store->name }}">
									</div>
									<div class="form-group">
										<label for="area">{{ __('Area') }} *</label>
										<input type="text" name="area" class="form-control" id="area"
											placeholder="{{ __('Enter Area') }}" value="{{ old('area', $store->area ?? '') }}">
									</div>
									<div class="form-group">
										<label for="address">{{ __('Address') }} *</label>
										<input type="text" name="address" class="form-control" id="address"
											placeholder="{{ __('Enter Address') }}" value="{{ old('address', $store->address ?? '') }}">
									</div>
									<div class="form-group">
										<label for="mobile">{{ __('Mobile') }} *</label>
										<input type="text" name="mobile" class="form-control" id="mobile"
											placeholder="{{ __('Enter Mobile') }}" value="{{ old('mobile', $store->mobile ?? '') }}">
									</div>
								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary ">{{ __('Submit') }}</button>
									</div>

									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

@endsection
