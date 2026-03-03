@extends('user.dashboard.layout')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-12 col-sm-offset-0 main_card">
        <div class="user_profile_card000">
        <div class="wg-box mt-5 mb-5">
            <div class="row">
            <div class="col-6">
                <h5>Ordered Details</h5>
            </div>
            <div class="col-6 text-right">
                <a class="btnBackOdrer" href="{{ route('custom.orders') }}">Back</a>
            </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <th>Order No</th>
                    <td>{{$order->transaction_number}}</td>
                    <th>Mobile</th>
                    <td>{{$billing['bill_phone'] ?? ''}}</td>
                    <th>Pin/Zip Code</th>
                    <td>{{$billing['bill_zip'] ?? ''}}</td>
                </tr>
                <tr>
                    <th>Order Date</th>
                    <td>{{$order->created_at->format('Y-m-d H:i:s')}}</td>
                    <th>Delivered Date</th>
                    <td>{{ $order->order_status == 'Delivered' ? $order->updated_at->format('Y-m-d') : '' }}</td>
                    <th>Canceled Date</th>
                    <td>{{ $order->order_status == 'Canceled' ? $order->updated_at->format('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Order Status</th>
                    <td colspan="5">
                        @if($order->order_status == 'Canceled')
                            <span class="custom_badge bg-danger_custom">{{$order->order_status}}</span>
                        @elseif($order->order_status == 'Delivered')
                            <span class="custom_badge bg-success_custom">{{$order->order_status}}</span>
                        @else
                            <span class="custom_badge bg-warning_custom">{{$order->order_status}}</span>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>


        <div class="wg-box ">
            <div class="row">
            <div class="col-6">
                <h5>Ordered Items</h5>
            </div>
            <div class="col-6 text-right">

            </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">SKU</th>
                    <th class="text-center">Category</th>
                    <!-- <th class="text-center">Brand</th> -->
                    <!-- <th class="text-center">Options</th> -->
                    <th class="text-center">Return Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cart as $key => $item)
                    @php
                        $productId = isset($item['item_id']) ? $item['item_id'] : (isset($item['id']) ? $item['id'] : 0);
                        $product = App\Models\Item::withTrashed()->find($productId);
                        $photoFallback = isset($item['photo']) ? $item['photo'] : ($product ? $product->photo : 'placeholder.png');
                        $nameFallback = isset($item['name']) ? $item['name'] : ($product ? $product->name : 'Unknown Item');
                        $priceFallback = isset($item['price']) ? $item['price'] : (isset($item['main_price']) ? $item['main_price'] : ($product ? $product->discount_price : 0));
                        $qtyFallback = isset($item['qty']) ? $item['qty'] : (isset($item['quantity']) ? $item['quantity'] : 1);
                    @endphp
                    <tr>
                        <td class="pname">
                        <div class="image">
                            <img src="{{ asset('assets/images/items/'.$photoFallback) }}" alt="{{$nameFallback}}" class="image">
                        </div>
                        <div class="name">
                            @if($product)
                                <a href="{{ route('front.product',$product->slug) }}" target="_blank" class="body-title-2">{{$nameFallback}}</a>
                            @else
                                <span class="body-title-2 text-muted">{{$nameFallback}} (Item Unavailable)</span>
                            @endif
                        </div>
                        </td>
                        <td class="text-center">{{ \PriceHelper::setCurrencyPrice($priceFallback) }}</td>
                        <td class="text-center">{{$qtyFallback}}</td>
                        <td class="text-center">{{$product ? $product->sku : 'N/A'}}</td>
                        <td class="text-center">{{$product && $product->category ? $product->category->name : ''}}</td>
                        <!-- <td class="text-center">{{$product && $product->brand ? $product->brand->name : ''}}</td>
                        <td class="text-center">
                            @if(isset($item['attribute']['option_name']) && is_array($item['attribute']['option_name']))
                            @foreach($item['attribute']['option_name'] as $optionkey => $option_name)
                            <span class="fas fa-check"></span> <b>{{ isset($item['attribute']['name'][$optionkey]) ? $item['attribute']['name'][$optionkey] : '' }}</b> : {{$option_name}} <br>
                            @endforeach
                            @endif
                        </td> -->
                        <td class="text-center">No</td>
                        <td class="text-center">
                        @if($product)
                        <a href="{{ route('front.product',$product->slug) }}" target="_blank">
                            <div class="list-icon-function view-icon">
                            <div class="item eye">
                                <i class="fa fa-eye"></i>
                            </div>
                            </div>
                        </a>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

        </div>

        <!-- <div class="wg-box mt-5">
            <h5>Shipping Address</h5>
            <div class="my-account__address-item col-md-6">
            <div class="my-account__address-item__detail">
                    <p>{{$shipping['ship_first_name'] ?? $billing['bill_first_name'] ?? ''}} {{$shipping['ship_last_name'] ?? $billing['bill_last_name'] ?? ''}}</p>
                    <p>{{$shipping['ship_address1'] ?? $billing['bill_address1'] ?? ''}}</p>
                    <p>{{$shipping['ship_city'] ?? $billing['bill_city'] ?? ''}}</p>
                    <p>{{$shipping['ship_zip'] ?? $billing['bill_zip'] ?? ''}}</p>
                    <p>{{$shipping['ship_country'] ?? $billing['bill_country'] ?? ''}}</p>
                    <br>
                    <p>Mobile : {{$shipping['ship_phone'] ?? $billing['bill_phone'] ?? ''}}</p>
                </div>
            </div>
        </div> -->

        <div class="wg-box mt-5">
            <h5>Transactions</h5>
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-transaction">
                <tbody>
                <tr>
                    <th>Subtotal</th>
                    <td>{{ \PriceHelper::setCurrencyPrice($order->state_price) }}</td>
                    <th>Tax</th>
                    <td>{{ \PriceHelper::setCurrencyPrice($order->tax) }}</td>
                    <th>Discount</th>
                    <td>{{ \PriceHelper::setCurrencyPrice($order->discount) }}</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>{{ \PriceHelper::setCurrencyPrice($order->state_price + $order->tax + $order->shipping - $order->discount) }}</td>
                    <th>Payment Mode</th>
                    <td>{{$order->payment_method}}</td>
                    <th>Status</th>
                    <td>
                        @if($order->payment_status == 'Paid')
                            <span class="custom_badge bg_custom_success">{{$order->payment_status}}</span>
                        @else
                            <span class="custom_badge bg-danger_custom">{{$order->payment_status}}</span>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>

        @if($order->order_status != 'Canceled' && $order->order_status != 'Delivered')
        <div class="wg-box custom_cancelOrder mt-5 text-right">
            <form action="{{route('user.order.index')}}" method="GET">
                <!-- A proper cancel route might be needed, falling back to orders page -->
                <button type="button" class="btnCancleOrder" onclick="alert('Cancel order not fully implemented backend yet.')">Cancel Order</button>
            </form>
        </div>
        @endif
            </div>
        </div>
    </div>
</div>
@endsection