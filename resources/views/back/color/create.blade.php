@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
	<div class="card mb-4">
		<div class="card-body">
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="mb-0 bc-title"><b>{{ __('Create color') }}</b> </h3>
				<a class="btn btn-primary  btn-sm" href="{{route('back.color.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
							<form class="admin-form" action="{{ route('back.color.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								@include('alerts.alerts')

								<div class="form-group row align-items-center">
									<label for="name" class="col-md-2 col-form-label">{{ __('Name') }} *</label>
									<div class="col-md-10 d-flex align-items-center gap-2">
										<!-- Color Name -->
										<input type="text" name="name" class="form-control item-name" id="name" placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}">

										<!-- Color Picker -->
										<input type="color" id="colorPicker" value="{{ old('code', '#ff0000') }}" class="form-control form-control-color" style="width: 50px; height: 38px; border-radius: 5px; padding:0;">

										<!-- Editable Hex Code -->
										<input type="text" id="code" name="code" value="{{ old('code', '#ff0000') }}" class="form-control" style="width: 100px; font-weight: 500;" placeholder="#ff0000">

										<!-- Live Preview -->
										<div id="colorPreview" style="width: 38px; height: 38px; border-radius: 5px; border: 1px solid #ccc; background-color: {{ old('code', '#ff0000') }};"></div>
									</div>
									<small id="colorError" class="form-text text-danger" style="display:none; margin-left: 12%;">Invalid hex code. Use format #RRGGBB.</small>
								</div>

								<div class="form-group mt-3">
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

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const picker = document.getElementById('colorPicker');
		const codeInput = document.getElementById('code');
		const preview = document.getElementById('colorPreview');
		const errorMsg = document.getElementById('colorError');

		// Update hex input & preview when picking a color
		picker.addEventListener('input', function() {
			codeInput.value = picker.value;
			preview.style.backgroundColor = picker.value;
			codeInput.classList.remove('is-invalid');
			errorMsg.style.display = 'none';
		});

		// Update picker & preview when typing a hex code
		codeInput.addEventListener('input', function() {
			const val = codeInput.value.trim();

			if (/^#([0-9A-Fa-f]{6})$/.test(val)) {
				picker.value = val;
				preview.style.backgroundColor = val;
				codeInput.classList.remove('is-invalid');
				errorMsg.style.display = 'none';
			} else {
				codeInput.classList.add('is-invalid');
				errorMsg.style.display = 'block';
			}
		});
	});
</script>