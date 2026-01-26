@extends('master.back')
@section('content')
    <!-- Start of Main Content -->
    <div class="container-fluid">
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
                                            @php
                                                $subtotal = 0;

                                                $customer = json_decode($order->billing_info);
                                            @endphp

                                            <input type="hidden" name="order_ref"value="{{ $order->transaction_number }}">
                                            <input type="hidden" name="order_id"value="{{ $order->id }}">
                                            <input type="hidden" name="txnid" value="{{ $order->txnid }}">
                                            <input type="hidden" name="customer_name" value="{{ $customer->ship_name }}">
                                            <input type="hidden" name="phone_number" value="{{ $customer->ship_phone }}">
                                            <input type="hidden" name="email" value="{{ $customer->ship_email }}">
                                            <input type="hidden" name="address" value="{{ $customer->ship_address1 }}">
                                            <input type="hidden" name="city" value="{{ $customer->ship_city }}">
                                            <input type="hidden" name="shipping_cost" value="{{ $order->shipping }}">
                                            <table class="table my-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th width="20%">Product</th>
                                                        <th>Variant</th>
                                                        <th>Qty</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Variten Price</th>
                                                        <th class="text-center">Total Price
                                                        <td class="text-right">Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- ================= EXISTING ORDER ITEMS ================= --}}

                                                    @foreach ($order->orderDetails as $detail)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="send_retailer_checkbox"
                                                                    data-detail-id="{{ $detail->id }}"
                                                                    {{ $detail->send_retailer == 1 ? 'disabled' : '' }}>
                                                            </td>

                                                            {{-- PRODUCT --}}
                                                            <td>
                                                                {{ $detail->item->name }}
                                                                <br>
                                                                <small class="text-muted">{{ $detail->item->sku }}</small>
                                                            </td>

                                                            {{-- VARIANT --}}
                                                            <td>
                                                                @php
                                                                    $variants = \App\Models\ItemVariant::where(
                                                                        'item_id',
                                                                        $detail->item_id,
                                                                    )->get();
                                                                @endphp
                                                                <select
                                                                    name="products[{{ $detail->id }}][item_variant_id]"
                                                                    class="form-control">
                                                                    <option value="">Select Variant</option>
                                                                    @foreach ($variants as $variant)
                                                                        <option value="{{ $variant->id }}"
                                                                            {{ $detail->item_variant_id == $variant->id ? 'selected' : '' }}>
                                                                            {{ $variant->variant_sku }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="number"
                                                                    name="products[{{ $detail->id }}][qty]"
                                                                    value="{{ $detail->qty }}" min="1"
                                                                    class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                {{ $detail->price }}
                                                            </td>
                                                            <td class="text-center">
                                                                {{ $detail->variant_price ?? 0 }}
                                                            </td>
                                                            <td class="text-center">
                                                                @php
                                                                    $sum = $detail->price + $detail->variant_price;
                                                                    $subtotal += $sum * $detail->qty;
                                                                @endphp
                                                                {{ $subtotal }}
                                                            </td>
                                                            <td class="text-right">
                                                                <button type="button"
                                                                    {{ $detail->send_retailer == 1 ? 'disabled' : '' }}
                                                                    class="btn btn-sm btn-danger removeRow"
                                                                    data-url="{{ route('order.item.delete', $detail->id) }}"
                                                                    data-id="{{ $detail->id }}">
                                                                    ✕
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="7" class="px-0 border-top border-top-2 text-right">
                                                            <strong><span class="text-muted">{{ __('Subtotal') }}</span>
                                                            </strong>
                                                        </td>
                                                        <td class="px-0 text-right border-top border-top-2"> <strong>
                                                                <span>{{ $subtotal }}</span> </strong> </td>
                                                    </tr>

                                                    @if ($order->shipping > 0)
                                                        <tr>
                                                            <td colspan="7"
                                                                class="px-0 border-top border-top-2 text-right"><strong>
                                                                    <span class="text-muted">{{ __('Shipping') }}</span>
                                                                </strong></td>
                                                            <td class="px-0 text-right border-top border-top-2">
                                                                <span><strong>{{ $order->shipping }}</span> </strong>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    <tr>
                                                        <td colspan="7"
                                                            class="px-0 border-top border-top-2 text-right">
                                                            <strong>
                                                                <span class="text-muted">{{ __('Total') }}</span>
                                                            </strong>
                                                        </td>
                                                        <td class="px-0 text-right border-top border-top-2">
                                                            <span><strong>{{ $order->TotalOrderPrice }}</span> </strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="px-0 border-top border-top-2 text-right">
                                                            <strong>
                                                                <span class="text-muted">{{ __('Order Note') }}</span>
                                                            </strong>
                                                        </td>
                                                        <td colspan="3"
                                                            class="px-0 text-right border-top border-top-2">
                                                            <input type="text" class="form-control" name="sale_note"
                                                                value="{{ $order->sale_note }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="text-right"><strong>Select Shop</strong>
                                                        </td>
                                                        <td>
                                                            <select name="store_id" class="form-control">
                                                                @foreach ($stores as $store)
                                                                    <option value="{{ $store->id }}">
                                                                        {{ $store->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    {{-- ================= SUBMIT ================= --}}
                                                    <tr>
                                                        <td colspan="8" class="text-right">
                                                            <button type="submit" class="btn btn-primary">
                                                                Send Order
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            // ✅ Unchecked items input disable, checked items enabled
            document.querySelectorAll('.send_retailer_checkbox').forEach(checkbox => {
                const detailId = checkbox.dataset.detailId;
                const variantInput = document.querySelector(`select[name='products[${detailId}][item_variant_id]']`);
                const qtyInput = document.querySelector(`input[name='products[${detailId}][qty]']`);

                // Initially disable all inputs
                variantInput.disabled = true;
                qtyInput.disabled = true;

                // Toggle inputs on checkbox change
                checkbox.addEventListener('change', function() {
                    const checked = this.checked;
                    variantInput.disabled = !checked;
                    qtyInput.disabled = !checked;
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.addEventListener('click', function(e) {
                    const btn = e.target.closest('.removeRow');
                    if (!btn) return;

                    const url = btn.dataset.url; // 🔥 data-url থেকে route
                    const row = btn.closest('tr');

                    if (!url) {
                        alert('Delete URL missing');
                        return;
                    }

                    if (!confirm('Are you sure you want to remove this item?')) return;

                    fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.status === 'success') {
                                row.remove();
                            } else {

                                alert(data.message || 'Delete failed');
                            }
                        })
                        .catch(err => {
                            console.error(err);
                            alert('Server error');
                        });
                });
            });
        </script>
    @endsection
