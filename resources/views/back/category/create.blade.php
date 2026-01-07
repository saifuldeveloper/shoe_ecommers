@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
	<div class="card mb-4">
		<div class="card-body">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="mb-0 bc-title"><b>{{ __('Create Category') }}</b> </h3>
				<a class="btn btn-primary btn-sm" href="{{route('back.category.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
							<form class="admin-form" action="{{ route('back.category.store') }}" method="POST"
								enctype="multipart/form-data">

								@csrf

								@include('alerts.alerts')

								<div class="form-group">
									<label for="name">{{ __('Set Image') }} *</label>
									<br>
									<img class="admin-img" src="{{  url('/assets/images/placeholder.png') }}"
										alt="No Image Found">
									<br>
									<span class="mt-1">{{ __('Image Size Should Be 400 x 213.') }}</span>
								</div>

								<div class="form-group position-relative">
									<label class="file">
										<input type="file" accept="image/*" class="upload-photo" name="photo" id="file"
											aria-label="File browser example">
										<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
									</label>
								</div>

								<div class="form-group">
									<label for="name">{{ __('Name') }} *</label>
									<input type="text" name="name" class="form-control item-name" id="name"
										placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}">
								</div>

								<div class="form-group d-none">
									<label for="slug">{{ __('Slug') }} *</label>
									<input type="text" name="slug" class="form-control" id="slug"
										placeholder="{{ __('Enter Slug') }}" value="{{ old('slug') }}">
								</div>

								<div class="form-group">
									<label for="is_in_menu">{{ __('Show in Menu?') }}</label>
									<select name="is_in_menu" id="is_in_menu" class="form-control">
										<option value="0" selected>{{ __('No') }}</option>
										<option value="1">{{ __('Yes') }}</option>
									</select>
								</div>

								<div class="form-group">
									<label for="menu_serial">{{ __('Menu Serial') }}</label>
									<input type="number" name="menu_serial" class="form-control" id="menu_serial"
										placeholder="{{ __('Enter Menu Serial Number') }}" value="{{ old('menu_serial', 0) }}">
								</div>

								<div class="form-group">
									<label for="is_banner">{{ __('Show in Banner?') }}</label>
									<select name="is_banner" id="is_banner" class="form-control">
										<option value="0" selected>{{ __('No') }}</option>
										<option value="1">{{ __('Yes') }}</option>
									</select>
								</div>

								<div class="form-group">
									<label for="banner_serial">{{ __('Banner Serial') }}</label>
									<input type="number" name="banner_serial" class="form-control" id="banner_serial"
										placeholder="{{ __('Enter Menu Serial Number') }}" value="{{ old('banner_serial', 0) }}">
								</div>

								<div class="form-group">
									<label for="is_featured">{{ __('Show as Featured?') }}</label>
									<select name="is_featured" id="is_featured" class="form-control">
										<option value="0" selected>{{ __('No') }}</option>
										<option value="1">{{ __('Yes') }}</option>
									</select>
								</div>

								<div class="form-group">
									<label for="featured_serial">{{ __('Featured Serial') }}</label>
									<input type="number" name="featured_serial" class="form-control" id="featured_serial"
										placeholder="{{ __('Enter Featured Serial Number') }}" value="{{ old('featured_serial', 0) }}">
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