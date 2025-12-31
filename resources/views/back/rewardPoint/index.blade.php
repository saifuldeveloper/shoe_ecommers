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

            <hr>

            <form action="#" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Sold amount per point *</label>
                        <input type="number" class="form-control" placeholder="100">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum sold amount to get point *</label>
                        <input type="number" class="form-control" placeholder="1000">
                    </div>

                </div>

                 <h3 class="mt-5 bc-title">
                    {{ __('Redeem Points Settings:') }}
                </h3>

                <div class="row" style="margin-top:25px;">

                    <div class="col-md-6 mb-3">
                        <label>Redeem amount per unit point</label>
                        <input type="text" class="form-control" placeholder="Redeem amount per unit point">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum order total to redeem points</label>
                        <input type="text" class="form-control" placeholder="Minimum order total to redeem points">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Maximum redeem point per order</label>
                        <input type="text" class="form-control" placeholder="Maximum redeem point per order">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Minimum redeem point</label>
                        <input type="text" class="form-control" placeholder="Minimum redeem point">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>

        </div>
    </div>

</div>
@endsection
