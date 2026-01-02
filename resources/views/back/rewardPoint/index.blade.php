@extends('master.back')

@section('content')
<div class="container-fluid">

    <div class="card mb-4">
        <div class="card-body">

            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title">
                    {{ __('Reward Point Setting') }}
                </h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif
            <hr>

            <form action="{{ route('admin.reward.point.system.update') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Sold amount per point *</label>
                       <input
                        type="number"
                        class="form-control"
                        name="sold_amount_per_point"
                        placeholder="100"
                        value="{{ old('sold_amount_per_point', $settings->sold_amount_per_point ?? '') }}"
                    >

                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum sold amount to get point *</label>
                        <input
                        type="number"
                        class="form-control"
                        name="min_sold_amount_to_get_point"
                        placeholder="1000"
                        value="{{ old('min_sold_amount_to_get_point', $settings->min_sold_amount_to_get_point ?? '') }}"
                    >
                    </div>

                </div>

                 <h3 class="mt-5 bc-title">
                    {{ __('Redeem Points Settings:') }}
                </h3>

                <div class="row" style="margin-top:25px;">

                    <div class="col-md-6 mb-3">
                        <label>Redeem amount per unit point</label>
                       <input
                            type="number"
                            class="form-control"
                            name="redeem_amount_per_unit_point"
                            value="{{ old('redeem_amount_per_unit_point', $settings->redeem_amount_per_unit_point ?? '') }}"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum order total to redeem points</label>
                        <input type="number" class="form-control" name="min_order_total_to_redeem_points"  value="{{ old('min_order_total_to_redeem_points', $settings->min_order_total_to_redeem_points ?? '') }}" placeholder="Minimum order total to redeem points">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Maximum redeem point per order</label>
                       <input
                        type="number"
                        class="form-control"
                        name="max_redeem_point_per_order"
                        value="{{ old('max_redeem_point_per_order', $settings->max_redeem_point_per_order ?? '') }}"
                    >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum redeem point</label>
                        <input
                            type="number"
                            class="form-control"
                            name="min_redeem_point"
                            value="{{ old('min_redeem_point', $settings->min_redeem_point ?? '') }}"
                        >
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>

        </div>
    </div>

</div>
@endsection
