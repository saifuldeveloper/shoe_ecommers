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
                        class="ps-shoe__favorite add-to-wishlist" 
                        data-id="{{ $product->id }}">
                            <i class="ps-icon-heart"></i>
                        </a>
                        <a class="compare-button" data-icon-compare="" href="javascript:void(0)" data-compare-product-handle="bata-men-jackson-mens-dress-mens-shoe" data-id="14747000439152" title="Add to Compare">
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


@push('js')
   <script>
    $(document).ready(function() {
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.add-to-wishlist').on('click', function(e) {
            e.preventDefault(); 
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
@endpush