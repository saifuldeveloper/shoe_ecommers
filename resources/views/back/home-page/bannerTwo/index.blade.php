@extends('master.back')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/back/css/select2.css')}}">
@endsection
@section('content')

<!-- Start of Main Content -->
 <div class="card shadow mb-4">
            <div class="card-body">
<div class="container-fluid">
      <div class="card mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="mb-0 bc-title"><b>{{ __('Second Banner') }}</b></h3>
                    <a href="{{ route('back.second.home.page.create') }}" class="btn btn-sm btn-primary"> <i
                            class="fas fa-plus"></i> {{ __('Add') }} </a>
                </div>
            </div>
        </div>
<div class="ps-content">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--whishlist">
            <table class="table ps-cart__table" class="table ">
                      @include('alerts.alerts')
              <thead>
                <tr>
                  <th>Image</th>
                  <th>URL</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @if ($bannerones->count() > 0)
                @foreach ($bannerones as $bannerSecond)
                <tr>
                   <td>
                    <img class="admin-img" 
                    src="{{ $bannerSecond->banner_second
                        ? (file_exists(public_path('storage/' . $bannerSecond->banner_second))
                            ? url('storage/' . $bannerSecond->banner_second)
                            : url('assets/images/' . $bannerSecond->banner_second))
                        : url('assets/images/default.jpg') }}"
                        alt="Image Not Found">  
                  </td>
                  <td><a class="ps-product__preview" href="">{{ $bannerSecond->url_second }}</a></td>
                  <td>
                     <div class="action-list">
                      <a class="btn btn-secondary btn-sm "
                          href="{{ route('back.second.home.page.edit',$bannerSecond->id) }}">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a class="btn btn-danger btn-sm " data-toggle="modal"
                          data-target="#confirm-delete" href="javascript:;"
                          data-href="{{ route('back.second.home.page.destroy',$bannerSecond->id) }}">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                  </div>
                  </td>
                </tr>
               
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="3">{{__('No Banner Found')}}</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
</div>
</div>
</div>
</div>

  {{-- DELETE MODAL --}}

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel"
        aria-hidden="true">
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
                    {{ __('You are going to delete this category. All contents related with this category will be lost.') }}
                    {{ __('Do you want to delete it?') }}
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