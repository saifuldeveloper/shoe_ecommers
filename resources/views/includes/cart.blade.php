@php
    $total = 0;
    $option_price = 0;
    $cartTotal = 0;
@endphp

<div class="container custom-cart-page">
    <div class="custom-cart-header">
        <h1 class="custom-cart-title">YOUR CART</h1>
        <div class="custom-continue-shopping">
            <a href="{{ route('front.product.collection.all') }}">
                Continue Shopping <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h6>PRODUCT(S)</h6><br>

            @foreach ($cart as $key => $item)
                @php
                    $item_variant = App\Models\ItemVariant::where('id', $item->item_variant_id)->first();
                    $item_price = $item->item->discount_price + ($item_variant != null ? $item_variant->additional_price : 0);
                    $cartTotal += $item_price * $item->quantity;
                @endphp

                <div class="custom-product-item" data-key="{{ $key }}">
                    <div class="separte_cart_product">
                        <a class="custom-product-thumb" href="#">
                            <img src="{{ asset('storage/items/' . $item->item->photo) }}" alt="{{ $item['name'] }}">
                        </a>

                        <div class="custom-product-info">
                            <h4 class="custom-product-title">
                                <a href="{{ route('front.product', $item->item->slug) }}">
                                    {{ Str::limit($item->item->name, 45) }}
                                </a>
                            </h4>

                            <p class="custom-product-meta">
                                @if (isset($item_variant->variant->name))
                                    {{ $item_variant->variant->name }}
                                @endif

                                @if (isset($item_variant->variant->size->name))
                                    {{ $item_variant->variant->size->name }}
                                @endif

                                @if (!isset($item_variant->variant->name) && !isset($item_variant->variant->size->name))
                                    {{ $item_variant->product_name ?? 'Basic Product' }}
                                @endif
                            </p>

                            <p class="custom-product-brand">{{ $item->item->brand->name }}</p>

                            <p class="custom-product-price">
                                <span class="itemPrice">{{ PriceHelper::setCurrencyPrice($item_price) }}</span>
                            </p>

                            <p class="custom-product-subtotal">
                                Subtotal:
                                <span class="itemPriceTotal">{{ PriceHelper::setCurrencyPrice($item_price * $item->quantity) }}</span>
                            </p>

                            <div class="d-flex align-items-center mt-2">
                                <label class="mr-2" for="quantity-{{ $loop->index }}">Quantity:</label>
                                <div class="cart-controls-wrapper">
                                    <div class="custom-qty-selector">
                                        <button type="button" class="decrease-qty-btn cartsubclick" data-id="{{ $key }}"
                                            data-target="{{ PriceHelper::GetItemId($key) }}">-</button>

                                        <input type="text" id="quantity-{{ $loop->index }}" class="qtyValue"
                                            value="{{ $item['quantity'] }}" readonly>

                                        <button type="button" class="increase-qty-btn cartaddclick" data-id="{{ $key }}"
                                            data-target="{{ PriceHelper::GetItemId($key) }}" data-item="">+</button>
                                    </div>

                                    <div class="custom-action-buttons">
                                        <a href="{{ route('front.cart.destroy', $item->id) }}">
                                            <button class="action-btn remove-btn">REMOVE</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-4">
                <p>We guarantee secure shopping.</p>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="custom-subtotal-card">
                <div class="custom-subtotal-box">
                    <h5 class="mb-3">SUBTOTAL</h5>
                    <div class="custom-subtotal-line custom-subtotal-line-total">
                        <span class="itemPriceGrandTotal">
                            {{ PriceHelper::setCurrencyPrice($cartTotal) }}
                        </span>
                    </div>
                </div>
                <a href="{{ route('front.checkout.payment') }}">
                    <button class="btn custom-checkout-btn">PROCEED TO CHECKOUT</button>
                </a>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Function to update subtotal for an item
    function updateItemTotal(qtyInput) {
        const container = qtyInput.closest('.custom-product-item');
        if (!container) return;

        const priceEl = container.querySelector('.itemPrice');
        const totalEl = container.querySelector('.itemPriceTotal');

        const price = parseFloat(priceEl.textContent.replace(/[^0-9.]/g, '')) || 0;
        const qty = parseInt(qtyInput.value, 10) || 0;
        const total = price * qty;

        if (totalEl) {
            totalEl.textContent = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(total);
        }

        updateGrandTotal();
    }

    // Function to update overall cart total
    function updateGrandTotal() {
        let total = 0;
        document.querySelectorAll('.itemPriceTotal').forEach(el => {
            const value = parseFloat(el.textContent.replace(/[^0-9.]/g, '')) || 0;
            total += value;
        });

        document.querySelectorAll('.itemPriceGrandTotal').forEach(el => {
            el.textContent = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(total);
        });
    }

    // Handle quantity increase
    document.querySelectorAll('.cartaddclick').forEach(btn => {
        btn.addEventListener('click', () => {
            const qtyInput = btn.closest('.custom-qty-selector').querySelector('.qtyValue');
            qtyInput.value = parseInt(qtyInput.value, 10) + 1;
            updateItemTotal(qtyInput);
        });
    });

    // Handle quantity decrease
    document.querySelectorAll('.cartsubclick').forEach(btn => {
        btn.addEventListener('click', () => {
            const qtyInput = btn.closest('.custom-qty-selector').querySelector('.qtyValue');
            const currentQty = parseInt(qtyInput.value, 10);
            if (currentQty > 1) {
                qtyInput.value = currentQty - 1;
                updateItemTotal(qtyInput);
            }
        });
    });

    // Initialize totals on load
    updateGrandTotal();
});
</script>
@endpush
