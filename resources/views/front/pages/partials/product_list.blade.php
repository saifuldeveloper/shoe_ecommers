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
                                    <span for="size{{ $size->id }}">{{ $size->name }}</span>
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('front.product', $product->slug) }}">
                                <span class="btn btn-dark shop-now-button">
                                    shop now
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
        <a href="{{ route('front.product', $product->slug) }}"><h4>No products found</h4></a>
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