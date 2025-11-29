@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
	<div class="card mb-4">
		<div class="card-body">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="mb-0 bc-title"><b>{{ __('Create Stores') }}</b> </h3>
				<a class="btn btn-primary  btn-sm" href="{{route('back.stores.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
							<form class="admin-form" action="{{ route('back.stores.store') }}" method="POST"
								enctype="multipart/form-data">

								@csrf

								@include('alerts.alerts')

								<div class="form-group">
									<label for="district_id">{{ __('Select District') }} *</label>
									<select name="district_id" id="district_id" class="form-control">
										<option value="">{{ __('Choose District') }}</option>
										@foreach($districts as $district)
										<option value="{{ $district->id }}" {{ old('district_id') == $district->id ? 'selected' : '' }}>
											{{ $district->name }}
										</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="name">{{ __('Name') }} *</label>
									<input type="text" name="name" class="form-control item-name" id="name"
										placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}">
								</div>
								<div class="form-group">
									<label for="area">{{ __('Area') }} *</label>
									<input type="text" name="area" class="form-control" id="area"
										placeholder="{{ __('Enter Area') }}" value="{{ old('area') }}">
								</div>
								<div class="form-group">
									<label for="address">{{ __('Address') }} *</label>
									<input type="text" name="address" class="form-control" id="address"
										placeholder="{{ __('Enter Address') }}" value="{{ old('address') }}">
								</div>

								<div class="form-group">
									<label for="latitude">{{ __('Latitude') }} *</label>
									<input
										type="text"
										name="latitude"
										class="form-control"
										id="latitude"
										placeholder="{{ __('Enter Latitude (e.g. 25.6279)') }}"
										value="{{ old('latitude') }}">
								</div>

								<div class="form-group">
									<label for="longitude">{{ __('Longitude') }} *</label>
									<input
										type="text"
										name="longitude"
										class="form-control"
										id="longitude"
										placeholder="{{ __('Enter Longitude (e.g. 88.6332)') }}"
										value="{{ old('longitude') }}">
								</div>

								<div class="form-group">
									<label for="mobile">{{ __('Mobile') }} *</label>
									<input type="text" name="mobile" class="form-control" id="mobile"
										placeholder="{{ __('Enter Mobile Number') }}" value="{{ old('mobile') }}">
								</div>

								<div class="form-group">
									<label for="api_base_url">{{ __('Api Base url') }} *</label>
									<input type="text" name="api_base_url" class="form-control" id="api_base_url"
										placeholder="{{ __('Enter Api_base_url Number') }}" value="{{ old('api_base_url') }}">
								</div>
								<div class="form-group">
									<label for="secret_key">{{ __('SECRET KEY') }} *</label>
									<input type="text" name="secret_key" class="form-control" id="secret_key"
										placeholder="{{ __('Enter SECRET KEY Number') }}" value="{{ old('secret_key') }}">
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