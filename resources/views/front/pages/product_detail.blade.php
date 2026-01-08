@extends('master.front')

@section('meta')
    <meta name="keywords" content="{{ $item_details->meta_keywords }}">
    <meta name="description" content="{{ $item_details->meta_description }}">
@endsection
@push('css')
    <style>
        .add-to-wishlist {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #f1f1f1;
            transition: all 0.3s ease;
        }

        .add-to-wishlist i {
            font-size: 20px;
            color: #555;
            transition: color 0.3s ease;
        }

        /* ✅ Active (Wishlisted) */
        .add-to-wishlist.active {
            background-color: rgba(231, 76, 60, 0.15);
            /* light red bg */
        }

        .add-to-wishlist.active i {
            color: #ffff;
            /* red heart */
            background: #f5c518;
            border-color: #ffff;

        }

        /* Optional hover effect */
        .add-to-wishlist:hover {
            background-color: rgba(231, 76, 60, 0.1);
        }
    </style>
@endpush

@section('content')
    @php
        $itemGalleries = App\Models\Gallery::where('item_id', $item_details->id)->get();
    @endphp
    <div class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            </div>
        </div>
    </div>
    <div class="ps-product--detail pt-60">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/items/' . $item_details->photo ?? '') }}"
                            class="img-fluid border mb-3 image-detail-main-image popup-image" alt="Product" />
                        @if (!empty($item_details->video))
                            <a href="{{ $item_details->video }}" class="video-play-icon popup-video" target="_blank">
                                ▶
                            </a>
                        @endif
                        <div class="d-flex">
                            <div class="owl-slider zoom-gallery product-slider" data-owl-auto="true" data-owl-dots="false"
                                data-owl-duration="1000" data-owl-gap="10" data-owl-item="4" data-owl-item-lg="6"
                                data-owl-item-md="5" data-owl-item-sm="4" data-owl-item-xs="2" data-owl-loop="true"
                                data-owl-mousedrag="on" data-owl-nav="true" data-owl-speed="5000">

                                {{-- src="{{ asset('storage/socialMediaPost/' . $post->photo) }}" --}}
                                @foreach ($itemGalleries ?? [] as $gallery)
                                    <a href="{{ asset('storage/items/' . $gallery->photo) }}"
                                        data-source="http://500px.com/photo/32736307" title="Into The Blue"
                                        style="width:193px;height:125px;">
                                        <img src="{{ asset('storage/items/' . $gallery->photo) }}" width="193"
                                            height="125">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <h4 class="item-name"><strong>{{ $item_details->name ?? '' }}</strong></h4>
                        @if ($item_details->code)
                            <p><strong>Product Code:</strong> {{ $item_details->code ?? '' }}</p>
                        @endif
                        <p><strong>Availability:</strong>
                            @if ($item_details->is_stock())
                                <span class="text-success  d-inline-block">{{ __('In Stock') }}</span>
                            @else
                                <span class="text-danger  d-inline-block">{{ __('Out of stock') }}</span>
                            @endif
                        </p>
                        <h3><span class="previous-price">Tk {{ $item_details->previous_price ?? '' }}</span><span
                                class="text-danger">Tk {{ $item_details->discount_price ?? '' }}</span></h3>
                        <p class="text-danger fw-bold">
                            @foreach (json_decode($item_details->specification_description) ?? [] as $spe)
                                * {{ $spe }} <br />
                            @endforeach
                        </p>
                        <p>{{ $item_details->sort_details ?? '' }}</p>
                        <!-- Size -->
                        @php
                            $variantsIds = $item_details->iteamVariant->pluck('variant_id')->values()->all();
                            $variants = App\Models\Variant::whereIn('id', $variantsIds)
                                ->pluck('size_id')
                                ->unique()
                                ->values()
                                ->all();
                            $sizes = App\Models\Size::whereIn('id', $variants)->get();
                        @endphp
                        @if ($sizes->count() > 0)
                            <div class="mb-3">
                                <div class="d-flex size_flex_data">
                                    <p><strong>Size</strong></p>
                                    <a data-toggle="modal" data-target="#size_chart" class="size-chart-open-popup"> <img
                                            src="{{ asset('assets/frontend/images/icon_sizechar.png') }}" /> Size Chart</a>
                                </div>
                                <div class="size-option d-flex">
                                    {{-- @foreach ($sizes as $size)
                                        <input type="radio" id="size{{ $size->id }}" name="size"
                                            value="{{ $size->id }}" checked>
                                        <label for="size{{ $size->id }}">{{ $size->name }}</label>
                                    @endforeach --}}
                                    @foreach ($sizes as $s)
                                        <input type="radio" id="size{{ $s->id }}" name="size"
                                            value="{{ $s->id }}"
                                            {{ strtolower($s->name) == strtolower($size) ? 'checked' : '' }}>
                                        <label for="size{{ $s->id }}">{{ $s->name }}</label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- Color -->

                        @php
                            $variantsIds = $item_details->iteamVariant->pluck('variant_id')->values()->all();
                            $variants = App\Models\Variant::whereIn('id', $variantsIds)
                                ->pluck('color_id')
                                ->unique()
                                ->values()
                                ->all();
                            $colors = App\Models\Color::whereIn('id', $variants)->get();
                        @endphp
                        @if ($colors->count() > 0)
                            <div class="mb-3">
                                <p><strong>Color</strong></p>
                                <div class="size-option d-flex">
                                    @foreach ($colors as $color)
                                        <input type="radio" id="color{{ $color->id }}" name="color"
                                            value="{{ $color->id }}" checked>
                                        <label for="color{{ $color->id }}">
                                            <span class="color-circle"
                                                style="background: {{ $color->code ?? '#000' }}; display:inline-block; width:20px; height:20px; border-radius:50%; border:1px solid #ccc; margin-top:8px;"></span>

                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- Promocode -->
                        {{-- <div class="mb-3">
                            <label class="form-label"><strong>Promocode</strong></label>
                            <input type="text" class="form-control" value="#MPC#525" />
                        </div> --}}

                        <!-- Quantity -->
                        <div class="mb-3 d-flex align-items-center">
                            <input type="hidden" id="itemPrice"
                                value="{{ $item_details->discount_price ?? $item_details->regular_price }}">
                            <label class="me-3"><strong>Quantity</strong></label>
                            <input type="number" id="qtyInput" class="form-control w-25 qtyValue" value="1"
                                min="1" />
                        </div>
                        <p><strong>Subtotal:</strong> ৳ <span id="subtotalDisplay"></span>
                        </p>
                        {{-- hidden inputs  --}}
                        <input type="hidden" value="{{ $item_details->id ?? '' }}" id="item_id">
                        <input type="hidden" id="demo_price" value="200">


                        <div class="d-flex">
                            <button class="btn btn-dark me-2  add_to_cartbtn" id="add_to_cart">ADD TO CART</button>
                            <a class="add-to-wishlist {{ isset($wishlists[$item_details->id]) ? 'active' : '' }}"
                                data-id="{{ $item_details->id }}">
                                <i class="ps-icon-heart love_icon"></i>
                            </a>

                            <!-- Buttons -->
                            <div class="d-flex">
                                <div>
                                    <button class="btn btn-outline-dark buy_now_btn" id="buy_to_cart">BUY IT NOW</button>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="ps-product__content mt-100">
                                <ul class="tab-list" role="tablist">
                                    <li class="active">
                                        <a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab"></a>
                                        Description</a>
                                    </li>
                                    <li>
                                        <a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Terms
                                            and Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">Size
                                            Chart</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content mb-60">
                                <div class="tab-pane active" role="tabpanel" id="tab_01">
                                {!! $item_details->details !!}
                                    </p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab_03">
                                    <p>
                                        Dear Customer, we try our best from our end to provide you the best customer
                                        experience.
                                        <br>

                                        **The delivery of your order is subjected to availability of stock.
                                        <br>

                                        **Check and receive your product in front of the delivery man. If your product is
                                        damaged, defective, incorrect or has any mismatch in size or pricing issue at the
                                        time of delivery, please return it immediately to the delivery person.
                                        <br>


                                        For any assistance, you can call our customer service at 09666200300. (9.00am to
                                        9.00pm except Govt. holidays) But in case if you couldn't reach the customer
                                        service, you can provide your issue details after selecting the proper issue section
                                        in our Report Issue Section.


                                        <br>
                                        Ordering Policy
                                        Service is only available for articles (products) which are shown in stock on our
                                        website
                                        The delivery of your order is subjected to availability of stock.
                                        Only one product should be booked in one order, in case of any customer needs to
                                        order multiple products or same products in multiple quantity, customers will need
                                        to place multiple separate orders.
                                        Currently, each order will be shipped only to a single destination address. If
                                        customers wish to ship products to different addresses, customers will need to place
                                        multiple separate orders.
                                        Orders that are paid for cannot be cancelled.
                                        For Order related queries, please kindly contact our Customer Service at
                                        09666200300. (9.00am to 9.00pm except Govt. holidays).
                                        <hr>
                                        <br>
                                        Shipping Policy
                                        We are committed to delivering your order accurately, in good condition, and on
                                        time. While we will endeavor to ship all items in your order together, this may not
                                        always be possible due to product characteristics, or stock availability.



                                        Please note our shipping policy as follows:

                                        We make our best efforts to ship each item in your order within 3 to 5 working days
                                        inside Dhaka metropolitan city and 7 to 10 working days outside Dhaka.
                                        We ship on regular week days (Sunday to Thursday), excluding public holidays.
                                        Currently, each order will be shipped only to a single destination address. If
                                        customers wish to ship products to different addresses, customers will need to place
                                        multiple separate orders.
                                        While we endeavor to ship all items your order accurately, in good condition, and on
                                        time, your order may get canceled or delivery may get delayed due to size
                                        unavailability, product unavailability or courier issues.
                                        To ensure that your order reaches you in the fastest time and in good condition, we
                                        only ship through reputed courier agencies


                                        Size Change
                                        Dear Customer,

                                        We are committed to ensure your satisfaction with any merchandise you have ordered
                                        from Avijatry.com. The delivery of your order is subjected to availability of stock.
                                        You are expected to check and receive your product in front of the delivery man. If
                                        your product is damaged, defective, incorrect or has any mismatch in size or pricing
                                        issue at the time of delivery, please return it immediately to the delivery person.

                                        If the size doesn't fit, you can exchange the size of the product bought from Bata
                                        E-Commerce site within 7 days from the delivery date. We will not accept the
                                        exchange request if you request for exchange after 7 days from the delivery date.

                                        We will only accept exchange that the product(s) being returned for exchange is
                                        unused, clean, and in their original state and packaging. In this case please
                                        contact our customer service regarding which store can be the most convenient one
                                        for you to get the replacement from depending on the product, size and stock
                                        availability.

                                        You have to call our customer service at 09666200300. (9.00am to 9.00pm except Govt.
                                        holidays) to initiate the exchange.

                                        An exchange cannot be done with a product of a different model.

                                        Please keep your invoice safe and intact as it is essential to give the same to the
                                        store while getting your product exchanged.
                                    </p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab_04">
                                    <div>
                                        <img src="{{ asset('assets/images/sizechart.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- might like image  --}}
            <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
                <div class="ps-container">
                    <div class="ps-section__header mb-50">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <h3 class="ps-section__title" data-mask="Related item">
                                    - YOU MIGHT ALSO LIKE
                                </h3>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="ps-owl-actions">
                                    <a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a
                                        class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__content">
                        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                            data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false"
                            data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3"
                            data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                            @include('front.pages.partials.product_list_two', [
                                'products' => $related_products,
                            ])
                        </div>
                    </div>
                </div>
            </div>


            {{-- might like image  --}}
            @if ($recently_viewed->count() > 0)
                <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
                    <div class="ps-container">
                        <div class="ps-section__header mb-50">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <h3 class="ps-section__title" data-mask="">
                                        - RECENTLY VIEW PRODUCTS
                                    </h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="ps-owl-actions">
                                        <a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a
                                            class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__content">
                            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                                data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false"
                                data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3"
                                data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                @include('front.pages.partials.product_list_two', [
                                    'products' => $recently_viewed,
                                ])


                            </div>
                        </div>
                    </div>
                </div>
            @endif


            {{-- //size modal   --}}
            <div class="modal fade halo_modal-custom" id="size_chart" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal_h5_title">
                                <span style="text-align: center">
                                    Size Chart
                                </span>
                            </h5>
                            <a data-dismiss="modal" class="close close-modal" title="Close" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                                    height="24px" class="icon-close">
                                    <path
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"
                                        font-weight="400" font-family="sans-serif" white-space="normal"
                                        overflow="visible" />
                                </svg>
                            </a>
                        </div>

                        <div class="modal-body">
                            <div class="size-chart-img">

                                <img src="//www.Avijatry.com/cdn/shop/files/size-chart-new_ca42ba2e-41a3-4df9-9c1a-ddfa2e4114e6_1024x1024.jpg?v=1745834022"
                                    alt="Size Chart" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Initialize zoom-gallery normally
            $('.zoom-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                allowHTMLInTemplate: true,
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' +
                            item.el.attr('data-source') + '" >image source</a>';
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    opener: function(element) {
                        return element.find('img');
                    }
                }
            });

            $('.image-detail-main-image').on('click', function() {
                var items = [{
                    src: $(this).attr('src'),
                    title: 'Main Image',
                    type: 'image'
                }];

                $('.zoom-gallery a').each(function() {
                    items.push({
                        src: $(this).attr('href'),
                        title: $(this).attr('title'),
                        type: 'image'
                    });
                });

                $.magnificPopup.open({
                    items: items,
                    gallery: {
                        enabled: true
                    },
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    zoom: {
                        enabled: true,
                        duration: 300,
                        opener: function(element) {
                            return element;
                        }
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Add / Remove Wishlist
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

            // Load wishlist count on page load
            updateWishlistCount();
        });


        // Wishlist Count
        function updateWishlistCount() {
            let url = '{{ route('user.wishlist.count') }}';

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let count = response.count ?? 0;
                    $('#wishlist-count-header i').text(count);
                    $('#wishlist-count-mobile i').text(count);
                },
                error: function() {
                    $('#wishlist-count-header i').text(0);
                    $('#wishlist-count-mobile i').text(0);
                }
            });
        }


        // SweetAlert Toast (Reusable)
        function showToast(message) {
            Swal.fire({
                icon: 'success',
                title: message,
                timer: 2000,
                showConfirmButton: false
            });
        }
    </script>





    <script>
        function updateSubtotal() {
            const price = parseFloat(document.getElementById('itemPrice')?.value || 0);
            const qty = parseInt(document.getElementById('qtyInput')?.value || 0);
            const display = document.getElementById('subtotalDisplay');

            if (!display || qty < 1) {
                display.textContent = '0.00';
                return;
            }

            display.textContent = (price * qty).toFixed(2);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const qtyInput = document.getElementById('qtyInput');
            if (qtyInput) {
                qtyInput.addEventListener('input', updateSubtotal);
                updateSubtotal();
            }
        });
    </script>
@endpush
