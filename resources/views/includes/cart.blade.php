@php
    
    $total = 0;
    $option_price = 0;
    $cartTotal = 0;
    
@endphp

<div class="card">
    <div class="card-body">
        <div class="table-responsive shopping-cart">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>{{ __('Product Name') }}</th>
                        <th>{{ __('Product Price') }}</th>
                        <th class="text-center">{{ __('Quantity') }}</th>
                        <th class="text-center">{{ __('Subtotal') }}</th>
                        <th class="text-center"><a class="btn btn-sm btn-primary"
                                href="{{ route('front.cart.clear') }}"><span>{{ __('Clear Cart') }}</span></a></th>
                    </tr>
                </thead>

                <tbody id="cart_view_load" data-target="{{ route('cart.get.load') }}">

                    @foreach ($cart as $key => $item)
                        @php
                            
                            $cartTotal += ($item['main_price'] + $total + $item['attribute_price']) * $item['qty'];
                        @endphp
                        <tr>
                            <td>
                                <div class="product-item"><a class="product-thumb"
                                        href="{{ route('front.product', $item->item->slug) }}"><img
                                            src="{{ asset('storage/items/' . $item->item->photo) }}" alt="Product"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{ route('front.product', $item->item->slug) }}">
                                                {{ Str::limit($item->item->name, 45) }}

                                            </a></h4>

                                    </div>
                                </div>
                            </td>
                            <td class="text-center text-lg">{{ PriceHelper::setCurrencyPrice($item->item->discount_price??"") }}
                            </td>

                            <td class="text-center">
                                @if ($item->item->item_type == 'normal')
                                    <div class="qtySelector product-quantity">
                                        <span class="decreaseQtycart cartsubclick" data-id="{{ $key }}"
                                            data-target="{{ PriceHelper::GetItemId($key) }}"><i
                                                class="fas fa-minus"></i></span>
                                        <input type="text" disabled class="qtyValue cartcart-amount"
                                            value="{{ $item->quantity }}">
                                        <span class="increaseQtycart cartaddclick" data-id="{{ $key }}"
                                            data-target="{{ PriceHelper::GetItemId($key) }}"
                                            data-item=""><i
                                                class="fas fa-plus"></i></span>
                                        <input type="hidden" value="3333" id="current_stock">
                                    </div>
                                @endif

                            </td>
                            <td class="text-center text-lg">
                                {{ PriceHelper::setCurrencyPrice($item->item->discount_price * $item->quantity) }}</td>

                            <td class="text-center"><a class="remove-from-cart"
                                    href="{{ route('front.cart.destroy', $key) }}" data-toggle="tooltip"
                                    title="Remove item"><i class="icon-x"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card mt-4">
    <div class="card-body">
        <div class="shopping-cart-footer">
            <div class="column">
                <form class="coupon-form" method="post" id="coupon_form" action="{{ route('front.promo.submit') }}">
                    @csrf
                    <input class="form-control form-control-sm" name="code" type="text"
                        placeholder="{{ __('Coupon code') }}" required>
                    <button class="btn btn-primary btn-sm"
                        type="submit"><span>{{ __('Apply Coupon') }}</span></button>
                </form>
            </div>

            <div class="text-right text-lg column {{ Session::has('coupon') ? '' : 'd-none' }}"><span
                    class="text-muted">{{ __('Discount') }}
                    ({{ Session::has('coupon') ? Session::get('coupon')['code']['title'] : '' }}) : </span><span
                    class="text-gray-dark">{{ PriceHelper::setCurrencyPrice(Session::has('coupon') ? Session::get('coupon')['discount'] : 0) }}</span>
                    <a class="remove-from-cart btn btn-danger btn-sm "
                                    href="{{ route('front.promo.destroy') }}" data-toggle="tooltip"
                                    title="Remove item"><i class="icon-x"></i></a>
            </div>

            <div class="text-right column text-lg"><span class="text-muted">{{ __('Subtotal') }}: </span><span
                    class="text-gray-dark">{{ PriceHelper::setCurrencyPrice($cartTotal - (Session::has('coupon') ? Session::get('coupon')['discount'] : 0)) }}</span>
            </div>


        </div>
        <div class="shopping-cart-footer">
            <div class="column"><a class="btn btn-primary " href="{{ route('front.catalog') }}"><span><i
                            class="icon-arrow-left"></i> {{ __('Back to Shopping') }}</span></a></div>
            <div class="column"><a class="btn btn-primary"
                    href="{{ route('front.checkout.payment') }}"><span>{{ __('Checkout') }}</span></a></div>
        </div>
    </div>
</div>
</div>
