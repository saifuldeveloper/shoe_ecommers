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
                        <h3 class="mb-0 bc-title"><b>{{ __('Campaign Offer') }}</b></h3>
                        <div class="right">
                            <a href="{{ route('back.campaign.offer.create') }}" class="btn btn-info btn-sm d-inline-block"><i
                                    class="fas fa-plus"></i>{{ __('Add') }}
                            </a>
                         
                        </div>
                    </div>
        
        </div>
    </div>

    {{-- Create Table Btn --}}

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
            @include('alerts.alerts')
            <form action="{{route('back.setting.update')}}" method="POST">
                @csrf
                    <div class="gd-responsive-table">
                    <table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @include('back.item.capaign_table', compact('datas'))
                        </tbody>

                    </table>
                </div>
            </form>
		</div>
	</div>

    {{-- //add the campaign --}}
	<div class="card shadow mb-4">
        <div class="card-header">
            <h4 class="card-title">{{__('Product Added for Campaign')}}</h4>
            <div class="row">
                <form action="{{ route('back.campaign.offer.add') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="campaign_id" class="form-control">
                                    <option value="" disabled selected>{{ __('Select Campaign Tile') }}</option>
                                    @foreach ($datas as $item)
                                        <option value="{{ $item->id }}">{{ $item->campaign_title }}</option>
                                    @endforeach
                                </select>
                                @error('campaign_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="item_id" class="form-control">
                                    <option value="" disabled selected>{{ __('Select products') }}</option>
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add To Campaign') }}
                        </button>
                    </div>
                </form>
            </div>

        </div>
       
		<div class="card-body">

            <table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>{{ __('Image') }}</th>
                        <th width="40%">{{ __('Campaign Name') }}</th>
                        <th width="40%">{{ __('Name') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Show Home Page') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($items->count() > 0)
                      @foreach ($items as $data)
                     
                          <tr>
                              <td><img src="{{url('/core/public/storage/images/'.$data->item?->photo)}}" alt=""></td>
                              <td>{{$data->campaignItem?->campaign_title}}</td>
                               <td>{{$data->item->name}}</td>
                              <td> {{ PriceHelper::adminCurrencyPrice($data->item->discount_price) }}</td>
                             <td>
                                <div class="dropdown">
                                    <button class="btn btn-{{ $data->status === 'active' ? 'success' : 'danger' }} btn-sm dropdown-toggle"
                                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $data->status === 'active' ? __('Publish') : __('Unpublish') }}
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('back.campaign.type.status', [$data->id, 1, 'status']) }}">{{ __('Publish') }}</a>
                                    <a class="dropdown-item" href="{{ route('back.campaign.type.status', [$data->id, 0, 'status']) }}">{{ __('Unpublish') }}</a>
                                    </div>
                                </div>
                                </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-{{  $data->is_feature == 1 ? 'success' : 'danger'  }} btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{  $data->is_feature == 1 ? __('Active') : __('Deactive')  }}
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="{{ route('back.campaign.type.status',[$data->id,1,'is_feature']) }}">{{ __('Active') }}</a>
                                      <a class="dropdown-item" href="{{ route('back.campaign.type.status',[$data->id,0,'is_feature']) }}">{{ __('Deactive') }}</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal"
                                    data-target="#confirm-delete" href="javascript:;"
                                    data-href="{{ route('back.campaign.offer.product.delete',$data->id) }}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                  </td>
                          </tr>
                      @endforeach
                    @else
                    <p class="d-block text-center">
                        {{ __('No Product Found') }}
                    </p>
                    @endif
                   
                    
                </tbody>

            </table>
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
			{{ __('You are going to delete this item. All contents related with this item will be lost.') }} {{ __('Do you want to delete it?') }}
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
@section('scripts')
    <script type="" src="{{asset('assets/back/js/select2.js')}}"></script>
    <script>
        $('#basic').select2({
			theme: "bootstrap"
		});
    </script>
@endsection