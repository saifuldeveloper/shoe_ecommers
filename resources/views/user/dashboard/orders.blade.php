@extends('user.dashboard.layout')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-10 col-sm-offset-0 main_card">
        <div class="user_profile_card000">
            <div class="panel-heading">
                <h3 class="panel-title">  Order History</h3>
                <small>This section contains your order information</small>
            </div>
            <div class="panel-body">
                <div class="row">
                   <div class="container my-4">
                        <div class="table-responsive custom_table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">OrderNo</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center">Tax</th>
                                    <th class="text-center">Total</th>
                                    
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Order Date</th>
                                    <th class="text-center">Items</th>
                                    <th class="text-center">Delivered On</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td class="text-center">{{$order->transaction_number}}</td>  
                                        <td class="text-center">{{$order->billing_name}}</td>
                                        <td class="text-center">{{$order->billing_phone}}</td>
                                        <td class="text-center">{{ \PriceHelper::setCurrencyPrice($order->cart_total) }}</td>
                                        <td class="text-center">{{ \PriceHelper::setCurrencyPrice($order->tax) }}</td>
                                        <td class="text-center">{{ \PriceHelper::setCurrencyPrice($order->cart_total + $order->tax) }}</td>
                                        
                                        <td class="text-center">
                                            @if($order->order_status == 'Canceled')
                                                <span class="custom_badge bg-danger_custom">{{$order->order_status}}</span>
                                            @elseif($order->order_status == 'Delivered')
                                                <span class="custom_badge bg-success_custom">{{$order->order_status}}</span>
                                            @else
                                                <span class="custom_badge bg-warning_custom">{{$order->order_status}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">{{$order->created_at->format('Y-m-d H:i:s')}}</td>
                                        <td class="text-center">{{$order->qty}}</td>
                                        <td class="text-center">{{ $order->order_status == 'Delivered' ? $order->updated_at->format('Y-m-d') : '' }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('custom.order-details', $order->id) }}">
                                                <div class="list-icon-function view-icon">
                                                    <div class="item eye">
                                                        <i class="fa fa-eye"></i>
                                                    </div>                                        
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
