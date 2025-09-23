@extends('master.back')

@section('content')

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Contacts Message') }}</b></h3>

                </div>
        </div>
    </div>


	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			@include('alerts.alerts')
            <br>
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped"  width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="15%">{{ __('Name') }}</th>
							<th width="10%">{{ __('Email') }}</th>
							<th width="15%">{{ __('Phone') }}</th>
							<th width="15%">{{ __('Description') }}</th>
						</tr>
					</thead>

					<tbody>
                        @include('back.contactMessage.table',compact('datas'))
					</tbody>

				</table>
				{{ $datas->links() }}
			</div>
		</div>
	</div>

</div>

</div>

@endsection
