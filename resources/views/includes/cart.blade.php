@php
    
    $total = 0;
    $option_price = 0;
    $cartTotal = 0;
@endphp

<div class="container custom-cart-page">
    <div class="custom-cart-header">
        <h1 class="custom-cart-title">YOUR CART</h1>
        <div class="custom-continue-shopping">
            <a href="#">
                Continue Shopping <i class="fas fa-chevron-right" ></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h6>PRODUCT(S)</h6> </br>

            @foreach ($cart as $key => $item)
        @php
        $item_variant = App\Models\ItemVariant::where('id', $item->item_variant_id)->first();
        $item_price = $item->item->discount_price + ($item_variant != null ? $item_variant->additional_price : 0);
        $cartTotal += $item_price * $item->quantity;
        @endphp

 <div class="custom-product-item" data-key="{{ $key }}"> {{-- Added data-key here --}}
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
            <span class="itemPrice">{{ PriceHelper::setCurrencyPrice($item_price??"") }}</span>
        </p>

 <p class="custom-product-subtotal">Subtotal: 
            <span class="itemPriceTotal">{{ PriceHelper::setCurrencyPrice($item_price * $item->quantity) }}</span>
        </p>

    <div class="d-flex align-items-center mt-2">     <label class="mr-2" for="quantity-{{ $loop->index }}" >Quantity:</label>     <div class="cart-controls-wrapper">      <div class="custom-qty-selector">        
                       <button type="button" class="decrease-qty-btn cartsubclick" data-id="{{ $key }}"
                            data-target="{{ PriceHelper::GetItemId($key) }}">-</button>
                    
                       <input type="text" id="quantity-{{ $loop->index }}" class="qtyValue" value="{{ $item['quantity'] }}" readonly>
                    
                        <button type="button" class="increase-qty-btn cartaddclick" data-id="{{ $key }}"
                            data-target="{{ PriceHelper::GetItemId($key) }}" data-item="">+</button>      </div>
      <div class="custom-action-buttons">       {{-- <button class="action-btn update-cart-btn">UPDATE CART</button> --}}       <a href="{{ route('front.cart.destroy', $item->id) }}">      <button class="action-btn remove-btn">REMOVE</button>       </a>      </div>     </div>    </div>    </div>   </div>    </div>  @endforeach
            
            <div class="mt-4">
                 <p>We guarantee secure shopping.</p>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="custom-subtotal-card">
                <div class="custom-subtotal-box">
                    <h5 class="mb-3">SUBTOTAL</h5>
                    <div class="custom-subtotal-line custom-subtotal-line-total">
                        <span class="itemPriceGrandTotal">  {{ PriceHelper::setCurrencyPrice($item_price * $item->quantity) }}</span> </div>
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
        
        // Function to update the total price for a single item
        function updateItemTotal(qtyInput) {
            // Find the closest container for the item (either 'tr' for the table or '.custom-product-item' for the custom design)
            var container = qtyInput.closest('tr') || qtyInput.closest('.custom-product-item');

            if (!container) return; // Exit if no container is found

            // Find the price element within the container
            var priceEl = container.querySelector('.itemPrice');
            var totalEl = container.querySelector('.itemPriceTotal');
            
            // Extract the price value
            var priceText = priceEl.textContent.replace(/[^0-9.]/g, '');
            var price = parseFloat(priceText) || 0;
            
            // Get the new quantity
            var qty = parseInt(qtyInput.value, 10) || 0;
            
            // Calculate the new total
            var total = price * qty;
            
            // Format the total price and update the subtotal element
            if (totalEl) {
                totalEl.textContent = qtyInput.value && !isNaN(total)
                    ? new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(total)
                    : '';
            }

            // Update the overall cart grand total
            updateGrandTotal();
        }

        // Function to update the grand total of the entire cart
        function updateGrandTotal() {
            let total = 0;
            // Loop through all itemPriceTotal elements from both the table and the custom section
            document.querySelectorAll('.itemPriceTotal').forEach(function (el) {
                // Ensure we only count the item once (e.g., if both tables are present, only count the one visible/primary)
                // For this scenario, we'll sum all of them for a robust total, but in a real app, you'd only use one cart display.
                let value = el.textContent.replace(/[^0-9.]/g, '');
                total += parseFloat(value) || 0;
            });
            
            // Update all grand total display elements
            document.querySelectorAll('.itemPriceGrandTotal').forEach(function(el) {
                 el.textContent =
                    new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(total);
            });
        }

        // --- Event Listeners for Table Quantity Buttons (Original) ---
        document.querySelectorAll('.cartaddclick').forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Find the corresponding quantity input element
                var qtyInput = btn.closest('.qtySelector') ? btn.closest('.qtySelector').querySelector('.qtyValue') : btn.closest('.custom-qty-selector').querySelector('.qtyValue');
                
                var currentQty = parseInt(qtyInput.value, 10) || 0;
                qtyInput.value = currentQty + 1;
                updateItemTotal(qtyInput);
            });
        });

        document.querySelectorAll('.cartsubclick').forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Find the corresponding quantity input element
                var qtyInput = btn.closest('.qtySelector') ? btn.closest('.qtySelector').querySelector('.qtyValue') : btn.closest('.custom-qty-selector').querySelector('.qtyValue');
                
                var currentQty = parseInt(qtyInput.value, 10) || 0;
                if (currentQty > 1) {
                    qtyInput.value = currentQty - 1;
                    updateItemTotal(qtyInput);
                }
            });
        });

        // Initialize the Grand Total on page load
        updateGrandTotal();
    });
</script>

<script>
    // This script is just for basic design visualization and matches the structure in the image. 
    // The actual functionality for updating the cart will use your existing Laravel Blade logic.
    document.querySelectorAll('.increase-qty-btn').forEach(button => {
        button.addEventListener('click', () => {
            let input = button.previousElementSibling;
            input.value = parseInt(input.value) + 1;
        });
    });

    document.querySelectorAll('.decrease-qty-btn').forEach(button => {
        button.addEventListener('click', () => {
            let input = button.nextElementSibling;
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        });
    });
</script>
@endpush
