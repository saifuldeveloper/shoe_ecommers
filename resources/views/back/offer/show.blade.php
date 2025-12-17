@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0  pl-3"><b>{{ __('Offer Details') }}</b> </h3>
                <a class="btn btn-primary btn-sm" href="{{route('back.offer.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
        <form action="{{route('back.offer.update',$offer->id)}}" method="POST">
            @csrf
            @method('PUT')
            @include('alerts.alerts')
			<div class="card">

					<!-- Nested Row within Card Body -->
                    <div class="card-body">
                        <div class="gd-responsive-table">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>{{ __("Offer Name") }}</th>
                                    <td> <input type="text" name="name" class="form-control" id="text"
                                     value="{{$offer->name}}" ></td>
                                </tr>
                                <tr>
                                    <th>{{ __("Discount Type") }}</th>
                                    <td>
                                        <select name="discount_type" class="form-control" id="discount_type">
                                            {{-- Option for 'flat' --}}
                                            <option value="flat" {{ $offer->discount_type == 'flat' ? 'selected' : '' }}>
                                                {{ __('Flat Discount') }} 
                                            </option>
                                            
                                            {{-- Option for 'percentage' --}}
                                            <option value="percentage" {{ $offer->discount_type == 'percentage' ? 'selected' : '' }}>
                                                {{ __('Percentage Discount (%)') }}
                                            </option>
                                        </select>
                                    </td>
                                 
                                </tr>
                                <tr>
                                    <th>{{ __("Discount Value") }}</th>
                                    <td><input type="text" name="discount_value" class="form-control" id="text"
                                         value="{{$offer->discount_value}}" ></td>
                                </tr>
                            



                            </table>
                            <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
                        </div>
                    </div>
			</div>
        </form>
		</div>

	</div>

</div>

@endsection
