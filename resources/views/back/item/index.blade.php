@extends('master.back')

@section('content')
    <style>
        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 814px;
                margin: 1.75rem auto;
            }
        }
    </style>

    <!-- Start of Main Content -->
    <div class="container-fluid">
        <!-- Start of Main Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="card mb-4 sticky-header-panel">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="mb-0 bc-title"><b>{{ __('All Products') }}</b></h3>
                        <div class="right">
                            <a href="{{ route('back.item.create') }}" class="btn btn-info btn-sm d-inline-block"><i
                                    class="fas fa-plus"></i>{{ __('Add Product') }}</a>
                            <a href="{{ route('back.csv.export') }}"
                                class="btn btn-info btn-sm d-inline-block">{{ __('CSV Export') }}</a>
                            <form class="d-inline-block" action="{{ route('back.bulk.delete') }}" method="get">
                                <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                <input type="hidden" value="items" name="table">
                                <button class="btn btn-danger btn-sm">{{ __('Bulk Delete') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" id="product_url" value="{{ route('back.item.index') }}">

            <!-- DataTales -->
            <div class="card products_all_Cards shadow mb-4">
                <div class="card-body ">
                    @include('alerts.alerts')
                    <form action="{{ route('back.item.index') }}" method="GET">
                        <div class="product-filter-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb-2"><b>{{ __('Product Filter :') }}</b></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="form-group px-0">
                                        <select class="form-control" name="is_type">
                                            <option disabled>{{ __('Select Type') }}</option>
                                            <option value="">{{ __('All Type') }}</option>
                                            <option value="undefine"
                                                {{ request()->input('is_type') == 'undefine' ? 'selected' : '' }}>
                                                {{ __('Undefine Product') }}</option>
                                            <option value="new"
                                                {{ request()->input('is_type') == 'new' ? 'selected' : '' }}>
                                                {{ __('New Arrival') }}</option>
                                            <option value="flash_deal"
                                                {{ request()->input('is_type') == 'flash_deal' ? 'selected' : '' }}>
                                                {{ __('Flash Deal Product') }}</option>
                                            <option value="feature"
                                                {{ request()->input('is_type') == 'feature' ? 'selected' : '' }}>
                                                {{ __('Featured Product') }}</option>
                                            <option value="best"
                                                {{ request()->input('is_type') == 'best' ? 'selected' : '' }}>
                                                {{ __('Best Product') }}</option>
                                            <option value="top"
                                                {{ request()->input('is_type') == 'top' ? 'selected' : '' }}>
                                                {{ __('Top Product') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group px-0">
                                            <select class="form-control" name="is_type">
                                                <option disabled>{{ __('Select Type') }}</option>
                                                <option value="">{{ __('All Type') }}</option>
                                                <option value="undefine"
                                                    {{ request()->input('is_type') == 'undefine' ? 'selected' : '' }}>
                                                    {{ __('Undefine Product') }}</option>
                                                <option value="new"
                                                    {{ request()->input('is_type') == 'new' ? 'selected' : '' }}>
                                                    {{ __('New Arrival') }}</option>
                                                <option value="flash_deal"
                                                    {{ request()->input('is_type') == 'flash_deal' ? 'selected' : '' }}>
                                                    {{ __('Flash Deal Product') }}</option>
                                                <option value="feature"
                                                    {{ request()->input('is_type') == 'feature' ? 'selected' : '' }}>
                                                    {{ __('Featured Product') }}</option>
                                                <option value="best"
                                                    {{ request()->input('is_type') == 'best' ? 'selected' : '' }}>
                                                    {{ __('Best Product') }}</option>
                                                <option value="top"
                                                    {{ request()->input('is_type') == 'top' ? 'selected' : '' }}>
                                                    {{ __('Top Product') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group px-0">
                                            <select class="form-control" name="category_id">
                                                <option disabled>{{ __('Select Category') }}</option>
                                                <option value="">{{ __('All Category') }}</option>
                                                @foreach (DB::table('categories')->whereStatus(1)->get() as $cat)
                                                    <option value="{{ $cat->id }}"
                                                        {{ request()->input('category_id') == $cat->id ? 'selected' : '' }}>
                                                        {{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-group px-0">
                                            <select class="form-control" name="orderby">
                                                <option disabled>{{ __('Select Order') }}</option>
                                                <option value="asc"
                                                    {{ request()->input('orderby') == 'asc' ? 'selected' : '' }}>
                                                    {{ __('Ascending order') }}</option>
                                                <option value="desc"
                                                    {{ request()->input('orderby') == 'desc' ? 'selected' : '' }}>
                                                    {{ __('Descending order') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <button type="submit"
                                            class="btn btn-primary  py-2  d-inline-block">{{ __('Filter Product') }}</button>
                                    </div>
                                </div>
                            </div>
                    </form>

                    <br>
                    <div class="gd-responsive-table">
                        <table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox" data-target="product-bulk-delete"
                                            class="form-control bulk_all_delete"> </th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Sku') }}</th>

                                    <th width="30%">{{ __('Name') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Live Stock') }}</th>
                                    {{-- <th>{{ __('Type') }}</th>
						    	    <th>{{ __('Item Type') }}</th> --}}
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                 @include('back.item.table', [
                                        'datas' => $datas,
                                        'isSoftDelete' => false
                                    ])
                            </tbody>
                        </table>
                    </div>

                    {{-- soft delete --}}
                    @if ($softDeletedItems->count() > 0)
                        <h3 class="mt-5"><b>{{ __('Deleted Products') }}</b></h3>
                        <hr>
                        <div class="gd-responsive-table">
                            <table class="table table-bordered table-striped" id="admin-table" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        {{-- <th> <input type="checkbox" data-target="product-bulk-delete"
                                                class="form-control bulk_all_delete"> </th> --}}
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Sku') }}</th>

                                        <th width="30%">{{ __('Name') }}</th>
                                        <th>{{ __('Price') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @include('back.item.table', [
                                        'datas' => $softDeletedItems,
                                        'isSoftDelete' => true,
                                    ])
                                </tbody>

                            </table>
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
    <!-- End of Main Content -->

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
                    {{ __('You are going to delete this item. All contents related with this item will be lost.') }}
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


    <!-- Modal -->
    <div class="modal fade" id="liveQtyModal" tabindex="-1">
        <div class="modal-dialog modal-xl"> <!-- MODAL LARGE -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Live Retail Quantity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeLiveQtyModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h4>Code: <span id="modalProductCode"></span></h4>
                    <h5>Total Quantity: <span id="modalLiveQty">Loading...</span></h5>

                    <div id="storeVariantContainer"></div>
                    <!-- এখানে store-wise table আসবে -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLiveQty(code) {
            $("#modalProductCode").text(code);
            $("#modalLiveQty").html("Loading...");
            $("#storeVariantContainer").html("");
            $("#liveQtyModal").modal('show');

            $.ajax({
                url: "{{ route('product.live.qty', ':code') }}".replace(':code', code),
                method: "GET",

                success: function(res) {
                    $("#modalLiveQty").text(res.total_qty);
                    let html = `<div class="row mt-3">`;

                    res.stores.forEach(store => {
                        html += `
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white py-2">
                                <strong>${store.store}</strong>
                                <span class="float-right">Total: ${store.total_qty}</span>
                            </div>
                            <div class="card-body p-2">
                                <table class="table table-sm table-bordered mb-0">
                                    <thead>
                                        <tr class="bg-light">
                                            <th>Variant</th>
                                            <th class="text-center" style="width:80px">Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                `;

                        store.variants.forEach(v => {
                            html += `
                        <tr>
                            <td>${v.variant}</td>
                            <td class="text-center">${v.qty}</td>
                        </tr>
                    `;
                        });

                        html += `
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                `;
                    });

                    html += `</div>`;

                    $("#storeVariantContainer").html(html);
                },

                error: function() {
                    $("#modalLiveQty").text("Error");
                }
            });
        }


        function closeLiveQtyModal() {
            $("#liveQtyModal").modal('hide');
        }
    </script>
@endsection
