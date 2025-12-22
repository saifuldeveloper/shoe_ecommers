@if ($products->count() > 0)
    @foreach ($products as $product)
        <div class="ps-product__column">
            <div class="ps-shoe mb-30">
                <a href="{{ route('front.product', $product->slug) }}">
                    <div class="ps-shoe__thumbnail">
                        <img src="{{ $product->thumbnail ? (file_exists(public_path('storage/items/'.$product->thumbnail)) ? url('storage/items/'.$product->thumbnail) : url('assets/images/'.$product->thumbnail)) : url('assets/images/default.jpg') }}" 
                             alt="Image Not Found">

                        <img class="hover-img" 
                             src="{{ $product->photo ? (file_exists(public_path('storage/items/'.$product->photo)) ? url('storage/items/'.$product->photo) : url('assets/images/'.$product->photo)) : url('assets/images/default.jpg') }}" 
                             alt="Image Not Found">
                       <a href="#" 
                        class="ps-shoe__favorite add-to-wishlist {{ $product->is_wishlist ? 'active' : '' }}"
                        data-id="{{ $product->id }}">
                            <i class="ps-icon-heart"></i>
                        </a>
                        <a class="compare-button add-to-compare" 
                           href="javascript:void(0)" 
                           data-id="{{ $product->id }}" 
                           title="Add to Compare">
                            <svg class="icon"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"></path><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"></path><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"></path><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"></path></svg>
                        </a>
                    </div>

                    <div class="ps-shoe__content">
                        <div class="ps-shoe__detail">
                            <a class="ps-shoe__name" href="product-detai.html">{{ $product->name }}</a>
                            <div>
                                <span class="ps-shoe__price"> &#2547; {{ $product->discount_price }}</span>
                            </div>
                        </div>
                        <div class="ps-shoe__variants">
                            <div class="text-center pb-10">
                                <p class="ps-shoe__categories pb-5">
                                     @php
                                         $sizes = collect($product->variants ?? [])->pluck('size')->unique('id')->filter();
                                      @endphp
                                    @foreach ($sizes as $size)
                                    @if (isset($size->id))
                                    <span for="size{{ $size->id }}">
                                        
                                    <a href="{{ route('front.product', ['slug' => $product->slug]) }}?size={{ $size->name }}"
                                                                class="#">  {{ $size->name }}</a>  
                                    </span>
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('front.product', $product->slug) }}">
                                <span class="btn btn-dark shop-now-button">
                                    Shop now
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach

@else
    <div class="col-12 text-center py-5">
        <a><h4>No products found</h4></a>
    </div>
@endif

 {{-- Global Compare Link (Initially hidden) --}}
   <div class="compare-link open hidden" id="global-compare-link">
        <a href="javascript:void(0)" id="open-compare-modal">
            <span class="compare-text">Compare</span>
            <span class="countPill countPill--positive countPill--alt" id="compare-count">0</span>
        </a>
    </div>

    {{-- Product Compare Modal --}}
    <div id="product-compare-modal" class="modal-overlay">
        <div class="modal-content">
            <div class="comparison-container">
                <div class="comparison-scroll-wrapper">
                      <div class="halo-modal-header">
                        <span class="text">Compare Products</span>
                        <a href="javascript:void(0)" class="remove-all" title="Remove All" id="remove-all-compare-products">
                            Remove All
                        </a>
                        {{-- Ensure this anchor tag has an ID for closing --}}
                        <a href="javascript:void(0)" class="close_close-modal" id="close-compare-modal" title="Close">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
                          <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"></path>
                      </svg>
                      </a>
                    </div>
                    <table class="comparison-table">
                         <tbody id="product-compare-body">
                            {{-- Dynamic Content (Product Headers & Attribute Rows) will be injected here by JS --}}
                         </tbody>
                    </table>
                    <p id="compare-empty-message" class="text-center py-5 hidden">Add products to compare using the compare icon on product hover.</p>
                </div>
            </div>
        </div>
    </div>


@push('js')
   <script>
    $(document).ready(function() {
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.add-to-wishlist').on('click', function(e) {
            e.preventDefault(); 
            let $this = $(this);
            let itemId = $(this).data('id');
            
            let url = '{{ route('user.wishlist.store', ['id' => 'ITEM_ID']) }}';
            url = url.replace('ITEM_ID', itemId); 

            // Make the AJAX call
            $.ajax({
                url: url,
                type: 'GET', 
                dataType: 'json',
                data: {
                    _token: csrfToken, 
                    id: itemId         
                },
                // ------------------------------------------

                success: function(response) {
                    if (response.status === 0 && response.link) {
                        alert("Wishlist-এ যোগ করার জন্য আপনাকে লগইন করতে হবে।"); 
                        window.location.href = response.link;
                    } 
                  else if (response.status === 1 || response.status === 2) {
                    $this.addClass('active');
                    alert(response.message);
                    updateWishlistCount();
                }
                else if (response.status === 2) {
                        $this.removeClass('active'); // normal
                        alert(response.message);
                        updateWishlistCount();
                    }
                },
            
            });
        });
    });

    function updateWishlistCount() {
        let url = '{{ route('user.wishlist.count') }}';

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.count !== undefined) {
                    $('#wishlist-count-header i').text(response.count);
                    $('#wishlist-count-mobile i').text(response.count);
                }
            },
            error: function(xhr) {
                console.error("Failed to fetch wishlist count:", xhr);
                $('#wishlist-count-header i').text(0);
                $('#wishlist-count-mobile i').text(0);
            }
        });
    }

    // Load count on page load too
    // updateWishlistCount();
</script>




<script>
     function updateCompareButton(count) {
        const compareLink = $('#global-compare-link');
        const compareCount = $('#compare-count');
        
        compareCount.text(count);

        // Show compare link only if 2 or more products are added
        if (count >= 2) {
            compareLink.removeClass('hidden'); 
        } else {
            compareLink.addClass('hidden'); 
        }
    }

    // Function to render the comparison table content
    function renderCompareModal(products) {
        const body = $('#product-compare-body');
        const emptyMessage = $('#compare-empty-message');
        body.empty(); // Clear existing content
        
        if (products.length === 0) {
            emptyMessage.removeClass('hidden');
            updateCompareButton(0);
            return;
        }

        emptyMessage.addClass('hidden');
        
        // Structure for attributes/rows - **MUST MATCH Controller's returned data structure**
        const attributes = [
            { key: 'description', label: 'DESCRIPTION' },
            { key: 'availability', label: 'AVAILABILITY' },
            { key: 'product_type', label: 'PRODUCT TYPE' },
            { key: 'sku', label: 'SKU' },
            { key: 'size', label: 'SIZE' },
            { key: 'color', label: 'COLOR' },
            { key: 'option', label: 'OPTION' }
        ];

        // 1. Create the Products header row
        let headerRow = '<tr class="product-header-row"><th class="attribute-col">Products</th>';
        
        products.forEach(product => {
            const oldPrice = product.old_price ? `<span class="old-price">৳ ${product.old_price}</span>` : '';
            
            headerRow += `
                <th class="product-col" data-product-id="${product.id}">
                    <div class="product-info">
                        <div class="product-image-box">
                             <img src="${product.thumbnail_url}" alt="${product.name}" />
                        </div>
                        <span class="product-name">${product.name}</span>
                        <div class="price-box">
                            ${oldPrice}
                            <span class="current-price">৳ ${product.current_price}</span>
                        </div>
                        <a href="${product.url}" class="shop-now-btn btn btn-dark my-2">SHOP NOW</a>
                        <a href="javascript:void(0)" class="remove-product-btn compare-remove-single" data-id="${product.id}">Remove</a>
                    </div>
                </th>
            `;
        });
        headerRow += '</tr>';
        body.append(headerRow);

        // 2. Create the Attribute rows
        attributes.forEach(attr => {
            let attrRow = `<tr><td class="attribute-col-label">${attr.label}</td>`;
            products.forEach(product => {
                // Safely access attribute data
                const value = product.attributes ? (product.attributes[attr.key] || 'N/A') : 'N/A';
                attrRow += `<td class="data-cell">${value}</td>`;
            });
            attrRow += '</tr>';
            body.append(attrRow);
        });

        // Update the global button count
        updateCompareButton(products.length);
        
        // Re-bind click handlers for dynamically added 'Remove' buttons
        $('.compare-remove-single').off('click').on('click', function() {
            const productId = $(this).data('id');
            removeProductFromCompare(productId);
        });
    }

    // --- AJAX Functions (Simplified) ---

    // Function to fetch and render current compare list
    function fetchAndRenderCompareList() {
        const url = '{{ route('compare.products') }}';

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                renderCompareModal(response.products || []);
            },
            error: function() {
                console.error('Failed to load comparison products.');
                renderCompareModal([]);
            }
        });
    }
    
    // Function to add a product
    function addProductToCompare(itemId) {
        const url = '{{ route('compare.add') }}';
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: url,
            type: 'POST', 
            dataType: 'json',
            data: {
                _token: csrfToken, 
                product_id: itemId         
            },
            success: function(response) {
                console.log(response)
                if (response.status === 'success') {
                    alert('Product added to compare! Total: ' + response.count);
                    renderCompareModal(response.products);
                } else if (response.status === 'limit_reached') {
                     alert('Comparison limit reached (max 4 products). Please remove an item first.');
                } else if (response.status === 'error') {
                     alert(' ' + response.message);
                }
            },
            error: function() {
               
            }
        });
    }

    // Function to remove a single product
    function removeProductFromCompare(itemId) {
        const url = '{{ route('compare.remove') }}';
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {
                _token: csrfToken, 
                product_id: itemId
            },
            success: function(response) {
                 if (response.status === 'success') {
                    // alert('Product removed from compare.');
                    renderCompareModal(response.products);
                } else {
                    alert('Failed to remove product from compare.');
                }
            },
            error: function() {
                alert('An error occurred while removing the product.');
            }
        });
    }

    // Function to clear all products
    function removeAllProductsFromCompare() {
        const url = '{{ route('compare.clear') }}';
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {
                _token: csrfToken
            },
            success: function(response) {
                 if (response.status === 'success') {
                    alert(' All products removed from compare.');
                    renderCompareModal([]);
                    $('#product-compare-modal').removeClass('is-visible'); 
                    document.body.style.overflow = '';
                } else {
                    alert('Failed to clear comparison list.');
                }
            },
            error: function() {
                alert('An error occurred while clearing the comparison list.');
            }
        });
    }


    // --- Event Listeners ---

    $(document).ready(function() {
        // 1. "Add to Compare" Button Click Handler (Icon on product hover)
        $('.add-to-compare').on('click', function(e) {
            e.preventDefault(); 
            let itemId = $(this).data('id');
            addProductToCompare(itemId);
        });

        // 2. "Open Compare Modal" Click Handler
        $('#open-compare-modal').on('click', function() {
            fetchAndRenderCompareList(); // Load data before opening
            $('#product-compare-modal').addClass('is-visible');
            document.body.style.overflow = 'hidden'; 
        });

        // 3. "Close Compare Modal" Click Handler
        $('#close-compare-modal').on('click', function() {
            $('#product-compare-modal').removeClass('is-visible');
            document.body.style.overflow = '';
        });

        // 4. "Remove All" Click Handler
        $('#remove-all-compare-products').on('click', function() {
            if (confirm("Are you sure you want to remove all products from the comparison list?")) {
                removeAllProductsFromCompare();
            }
        });
        
        // 5. Close modal if user clicks outside the content (Modal Overlay)
        $('#product-compare-modal').on('click', function(e) {
            if (e.target.id === 'product-compare-modal') {
                $('#product-compare-modal').removeClass('is-visible');
                document.body.style.overflow = '';
            }
        });
        
        // Initial load of comparison count on page load
        fetchAndRenderCompareList(); 
    });
</script>
@endpush