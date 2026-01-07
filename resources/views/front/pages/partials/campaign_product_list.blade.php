@if ($products->count() > 0)
    @foreach ($products as $product)
        <div class="ps-product__column">
            <div class="ps-shoe mb-30">
                <a href="{{ route('front.product', $product->item->slug) }}">
                    <div class="ps-shoe__thumbnail">
                        <img src="{{ $product->item->thumbnail ? (file_exists(public_path('storage/items/'.$product->item->thumbnail)) ? url('storage/items/'.$product->item->thumbnail) : url('assets/images/'.$product->item->thumbnail)) : url('assets/images/default.jpg') }}" 
                             alt="Image Not Found">

                        <img class="hover-img" 
                             src="{{ $product->item->photo ? (file_exists(public_path('storage/items/'.$product->item->photo)) ? url('storage/items/'.$product->item->photo) : url('assets/images/'.$product->item->photo)) : url('assets/images/default.jpg') }}" 
                             alt="Image Not Found">

                       <a href="#" 
                        class="ps-shoe__favorite add-to-wishlist {{ isset($wishlists[$product->id]) ? 'active' : '' }}"  
                        data-id="{{ $product->item->id }}">
                            <i class="ps-icon-heart"></i>
                        </a>
                    </div>

                    <div class="ps-shoe__content">
                        <div class="ps-shoe__detail">
                            <a class="ps-shoe__name" href="product-detai.html">{{ $product->item->name }}</a>
                            <div>
                                <span class="ps-shoe__price"> &#2547; {{ $product->item->discount_price }}</span>
                            </div>
                        </div>
                        <div class="ps-shoe__variants">
                            <div class="text-center pb-10">
                                <p class="ps-shoe__categories pb-5">
                                     @php
                                         $sizes = collect($product->item->variants ?? [])->pluck('size')->unique('id')->filter();
                                      @endphp
                                    @foreach ($sizes as $size)
                                    @if (isset($size->id))
                                    <span for="size{{ $size->id }}">{{ $size->name }}</span>
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('front.product', $product->item->slug) }}">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            $(document).on('click', '.add-to-wishlist', function(e) {
                e.preventDefault();
                let $this = $(this);
                let itemId = $this.data('id');
                let url = '{{ route('user.wishlist.store', ['id' => 'ITEM_ID']) }}';
                url = url.replace('ITEM_ID', itemId);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        _token: csrfToken,
                        id: itemId
                    },
                    success: function(response) {

                        // Login required
                        if (response.status === 0 && response.link) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Login Required',
                                text: "Wishlist-এ যোগ করার জন্য আপনাকে লগইন করতে হবে।",
                                confirmButtonText: 'Login'
                            }).then(() => {
                                window.location.href = response.link;
                            });
                        }

                        // Added to wishlist
                        else if (response.status === 1) {
                            $this.addClass('active');
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                // text: response.message,
                                timer: 3000,
                                showConfirmButton: false
                            });
                            updateWishlistCount();
                        }

                        // Removed from wishlist
                        else if (response.status === 2) {
                            $this.removeClass('active');
                            Swal.fire({
                                icon: 'success',
                                title: response.message,
                                // text: response.message,
                                timer: 3000,
                                showConfirmButton: false
                            });
                            updateWishlistCount();
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
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
                    const count = response.count || 0;
                    $('#wishlist-count-header i').text(count);
                    $('#wishlist-count-mobile i').text(count);
                },
                error: function(xhr) {
                    console.error("Failed to fetch wishlist count:", xhr);
                    $('#wishlist-count-header i').text(0);
                    $('#wishlist-count-mobile i').text(0);
                }
            });
        }

        // Optional: Load count on page load
        updateWishlistCount();
    </script>
@endpush