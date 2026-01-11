@extends('master.back')

@section('content')

    <!-- Start of Main Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class=" mb-0">{{ __('Order Invoice') }} </h3>
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('back.order.index') }}"><i
                                class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                        {{-- <a class="btn btn-primary btn-sm" href="{{ route('back.order.print', $order->id) }}"
                            target="_blank"><i class="fas fa-print"></i> {{ __('print') }}</a>
                    </div> --}}
                    </div>
                </div>
            </div>
            @php
                if ($order->state) {
                    $state = json_decode($order->state, true);
                } else {
                    $state = [];
                }
            @endphp

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('alerts.alerts')
                            <div class="row">
                                <div class="col-4">
                                    <h5><b>{{ __('Order Details :') }}</b></h5>
                                    <span class="text-muted">{{ __('Transaction Id :') }}</span>{{ $order->txnid }}<br>
                                    <span
                                        class="text-muted">{{ __('Order Id :') }}</span>{{ $order->transaction_number }}<br>
                                    <span
                                        class="text-muted">{{ __('Order Date :') }}</span>{{ $order->created_at->format('M d, Y') }}<br>
                                    <span class="text-muted">{{ __('Payment Status :') }}</span>
                                    @if ($order->payment_status == 'Paid')
                                        <div class="badge badge-success">
                                            {{ __('Paid') }}
                                        </div>
                                    @else
                                        <div class="badge badge-danger">
                                            {{ __('Unpaid') }}
                                        </div>
                                    @endif
                                    <br>
                                    <span
                                        class="text-muted">{{ __('Payment Method :') }}</span>{{ $order->payment_method }}<br>

                                    <br>
                                    <br>
                                </div>

                                <div class="col-4 text-center">
                                    <!-- Logo -->
                                    <img class="img-fluid mb-5 mh-70" width="80" alt="Logo"
                                        src="{{ $setting->logo ? url('/storage/generalSettings/' . $setting->logo) : url('/assets/images/placeholder.png') }}">

                                </div>
                                <div class="col-4 text-right">
                                    <h5>{{ __('Shipping Address :') }}</h5>
                                    @php
                                        $ship = json_decode($order->billing_info, true);
                                    @endphp
                                    <span class="text-muted">{{ __('Name') }}: </span>{{ $ship['ship_name'] ?? '' }}
                                    {{-- {{ $ship['ship_last_name'] ?? '' }} <br> --}}
                                    <span class="text-muted">{{ __('Email') }}:
                                    </span>{{ $ship['ship_email'] ?? '' }}<br>
                                    <span class="text-muted">{{ __('Phone') }}:
                                    </span>{{ $ship['ship_phone'] ?? '' }}<br>
                                    @if (isset($ship['ship_address1']))
                                        <span class="text-muted">{{ __('Address') }}:
                                        </span>{{ $ship['ship_address1'] ?? '' }},
                                        {{ isset($ship['ship_address2']) ? $ship['ship_address2'] : '' }}<br>
                                    @endif
                                    @if (isset($ship['ship_country']))
                                        <span class="text-muted">{{ __('Country') }}:
                                        </span>{{ $ship['ship_country'] ?? '' }}<br>
                                    @endif
                                    @if (isset($ship['ship_city']))
                                        <span class="text-muted">{{ __('City') }}:
                                        </span>{{ $ship['ship_city'] ?? '' }}<br>
                                    @endif
                                    @if (isset($state['name']))
                                        <span class="text-muted">{{ __('State') }}:
                                        </span>{{ $state['name'] ?? '' }}<br>
                                    @endif
                                    @if (isset($ship['ship_zip']))
                                        <span class="text-muted">{{ __('Zip') }}:
                                        </span>{{ $ship['ship_zip'] ?? '' }}<br>
                                    @endif
                                    @if (isset($ship['ship_company']))
                                        <span class="text-muted">{{ __('Company') }}:
                                        </span>{{ $ship['ship_company'] ?? '' }}<br>
                                    @endif

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="gd-responsive-table">
                                        <form action="{{ route('send.retailer.order') }}" method="POST">
                                             @csrf
                                            
                                            <table class="table my-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th width="50%" class="px-0 bg-transparent border-top-0">
                                                            <span class="h6">{{ __('Products') }}</span>
                                                        </th>
                                                        <th class="px-0 bg-transparent border-top-0">
                                                            <span class="h6">{{ __('Attribute') }}</span>
                                                        </th>
                                                        <th class="px-0 bg-transparent border-top-0">
                                                            <span class="h6">{{ __('Quantity') }}</span>
                                                        </th>
                                                        <th class="px-0 bg-transparent border-top-0 text-right">
                                                            <span class="h6">{{ __('Price') }}</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $option_price = 0;
                                                        $total = 0;
                                                    @endphp
                                                    @foreach ($order->orderDetails as $order)
                                                        @php
                                                            $total += $order['main_price'] * $order['qty'];
                                                            $option_price += $order['attribute_price'];
                                                            $grandSubtotal = $total + $option_price;
                                                        @endphp
                                                        <tr>
                                                            <td><input type="checkbox" name="products[{{ $loop->index }}][code]" value="Pink/13-A-3554">

                                                            </td>
                                                            <td class="px-0">
                                                                {{ $order->item->name }}- ({{ $order->item->sku }})
                                                            </td>
                                                            <td class="px-0">
                                                                @if (isset($order['attribute']['names']))
                                                                    @foreach ($order['attribute']['names'] as $index => $name)
                                                                        {{ $name }} :
                                                                        {{ $order['attribute']['option_name'][$index] }}<br>
                                                                    @endforeach
                                                                @else
                                                                    --
                                                                @endif
                                                            </td>
                                                            <td class="px-0">
                                                                {{ $order->qty }}
                                                                <input type="hidden" name="products[{{ $loop->index }}][qty]"
                                                                    value="{{ $order->qty }}">
                                                            </td>

                                                            <td class="px-0 text-right">
                                                                {{ $order->price }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @if ($order->tax != 0)
                                                        <tr>
                                                            <td class="px-0 border-top border-top-2">
                                                                <span class="text-muted">{{ __('Tax') }}</span>
                                                            </td>
                                                            <td class="px-0 text-right border-top border-top-2"
                                                                colspan="5">
                                                                <span>
                                                                    @if ($setting->currency_direction == 1)
                                                                        {{ $order->currency_sign }}{{ round($order->tax * $order->currency_value, 2) }}
                                                                    @else
                                                                        {{ round($order->tax * $order->currency_value, 2) }}{{ $order->currency_sign }}
                                                                    @endif
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if (json_decode($order->discount, true))
                                                        @php
                                                            $discount = json_decode($order->discount, true);
                                                        @endphp
                                                        <tr>
                                                            <td class="px-0 border-top border-top-2">
                                                                <span class="text-muted">{{ __('Coupon discount') }}
                                                                    ({{ $discount['code']['code_name'] }})</span>
                                                            </td>
                                                            <td class="px-0 text-right border-top border-top-2"
                                                                colspan="5">
                                                                <span class="text-danger">
                                                                    @if ($setting->currency_direction == 1)
                                                                        -{{ $order->currency_sign }}{{ round($discount['discount'] * $order->currency_value, 2) }}
                                                                    @else
                                                                        -{{ round($discount['discount'] * $order->currency_value, 2) }}{{ $order->currency_sign }}
                                                                    @endif
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if (json_decode($order->shipping, true))
                                                        @php
                                                            $shipping = json_decode($order->shipping, true);
                                                        @endphp
                                                        <tr>
                                                            <td class="px-0 border-top border-top-2">
                                                                <span class="text-muted">{{ __('Shipping') }}</span>
                                                            </td>
                                                            <td class="px-0 text-right border-top border-top-2"
                                                                colspan="5">
                                                                <span>
                                                                    @if ($setting->currency_direction == 1)
                                                                        {{ $order->currency_sign }}{{ round($shipping['price'] * $order->currency_value, 2) }}
                                                                    @else
                                                                        {{ round($shipping['price'] * $order->currency_value, 2) }}{{ $order->currency_sign }}
                                                                    @endif

                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if (json_decode($order->state_price, true))
                                                        <tr>
                                                            <td class="px-0 border-top border-top-2">
                                                                <span class="text-muted">{{ __('State Tax') }}</span>
                                                            </td>
                                                            <td class="px-0 text-right border-top border-top-2"
                                                                colspan="5">
                                                                <span>
                                                                    @if ($setting->currency_direction == 1)
                                                                        {{ isset($state['type']) && $state['type'] == 'percentage' ? ' (' . $state['price'] . '%) ' : '' }}
                                                                        {{ $order->currency_sign }}{{ round($order['state_price'] * $order->currency_value, 2) }}
                                                                    @else
                                                                        {{ isset($state['type']) && $state['type'] == 'percentage' ? ' (' . $state['price'] . '%) ' : '' }}
                                                                        {{ round($order['state_price'] * $order->currency_value, 2) }}{{ $order->currency_sign }}
                                                                    @endif

                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    <tr>
                                                        <td class="px-0 border-top border-top-2">
                                                            @if ($order->payment_method == 'Cash On Delivery')
                                                                <strong>{{ __('Total amount') }}</strong>
                                                            @else
                                                                <strong>{{ __('Total amount due') }}</strong>
                                                            @endif
                                                        </td>
                                                        <td class="px-0 text-right border-top border-top-2" colspan="5">
                                                            <span class="h3">
                                                                @if ($setting->currency_direction == 1)
                                                                    {{ $order->currency_sign }}{{ PriceHelper::OrderTotal($order) }}
                                                                @else
                                                                    {{ PriceHelper::OrderTotal($order) }}{{ $order->currency_sign }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td><strong>
                                                                Select Shop
                                                            </strong></td>
                                                        <td>
                                                            <select name="store_id" id="" class="form-control">
                                                                @foreach ($stores as $key => $store)
                                                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary" type="submit">Send
                                                                Order</button>
                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
            </div>


        </div>

    @endsection
