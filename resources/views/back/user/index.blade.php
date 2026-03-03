@extends('master.back')

@section('content')

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 "><b>{{ __('Customers List') }}</b></h3>
                <form action="{{ route('back.user.index') }}" method="GET" class="d-flex align-items-center">
                    <label for="start_date" class="mr-2 mb-0"><small>{{ __('From') }}:</small></label>
                    <input type="date" name="start_date" id="start_date" class="form-control form-control-sm mr-2" value="{{ request('start_date') }}">
                    
                    <label for="end_date" class="mr-2 mb-0"><small>{{ __('To') }}:</small></label>
                    <input type="date" name="end_date" id="end_date" class="form-control form-control-sm mr-3" value="{{ request('end_date') }}">
                    
                    <button type="submit" class="btn btn-info btn-sm mr-2"><i class="fas fa-filter"></i> {{ __('Filter') }}</button>
                    <a href="{{ route('back.user.export', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}" class="btn btn-primary btn-sm"><i class="fas fa-file-export"></i> {{ __('Export CSV') }}</a>
                </form>
            </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			@include('alerts.alerts')
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
							<th>{{ __('Name') }}</th>
							<th>{{ __('Email') }}</th>
							<th>{{ __('Phone') }}</th>
							<th>{{ __('Total Reward Point') }}</th>
							<th>{{ __('Discount') }}</th>
							<th>{{ __('Total Purchase') }}</th>
							<th>{{ __('Actions') }}</th>
						</tr>
					</thead>

					<tbody>
              			@include('back.user.table',compact('datas'))
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>

</div>
<!-- End of Main Content -->


{{-- DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Confirm Delete?') }}</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			{{ __('You are going to delete this Admin. All contents related with this admin will be lost.') }} {{ __('Do you want to delete it?') }}
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
			<form action="" class="d-inline btn-ok" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

			</form>
		</div>

      </div>
    </div>
  </div>

{{-- DELETE MODAL ENDS --}}


@endsection
