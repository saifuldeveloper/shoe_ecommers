@extends('master.front')

@section('meta')
    <meta name="keywords" content="{{ $item->meta_keywords }}">
    <meta name="description" content="{{ $item->meta_description }}">
@endsection
@push('css')
    <link href="{{ asset('assets/frontend/css/chatbox.css') }}" rel="stylesheet" />
    <style>
        .zoom-wrapper {
            position: relative;
            overflow: hidden;
            cursor: zoom-in;
            width: 100%;
            max-width: 700px;
            height: auto;
            touch-action: manipulation;


            /* border: 1px solid #ddd; */
        }

        .zoom-wrapper img.zoom-image {
            width: 100%;
            height: auto;
            transition: transform 0.2s ease;
            transform-origin: center center;
        }

        /* Optional: magnifier lens effect overlay */
        .zoom-lens {
            position: absolute;
            border: 2px solid rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            width: 150px;
            height: 150px;
            pointer-events: none;
            display: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
@endpush

@section('content')
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
                        <!-- MAIN IMAGE + ZOOM -->
                        <div class="zoom-wrapper position-relative mb-3">
                            <img src="{{ asset('storage/items/' . ($item->photo ?? '')) }}"
                                class="img-fluid border image-detail-main-image zoom-image popup-image " alt="Product">

                            @if (!empty($item->video))
                                <a href="{{ $item->video }}" class="video-play-icon popup-video" target="_blank">
                                    ▶
                                </a>
                            @endif
                        </div>

                        <!-- GALLERY THUMBNAILS -->
                        <div class="product-gallery d-flex flex-wrap gap-2">
                            @foreach ($itemGalleries ?? [] as $gallery)
                                <a href="{{ asset('storage/items/' . $gallery->photo) }}" class="gallery-thumb"
                                    title="Into The Blue">
                                    <img src="{{ asset('storage/items/' . $gallery->photo) }}" class="img-thumbnail"
                                        width="193" height="125" alt="Gallery Image">
                                </a>
                            @endforeach
                        </div>

                    </div>

                    <!-- Product Details -->
                    <div class="col-md-6">
                        <h4 class="item-name"><strong>{{ $item->name ?? '' }}</strong></h4>
                        @if ($item->code)
                            <p><strong>Product Code:</strong> {{ $item->code ?? '' }}</p>
                        @endif
                        <p><strong>Availability:</strong>
                            {{-- @if ($item->is_stock()) --}}
                            <span class="text-success  d-inline-block">{{ __('In Stock') }}</span>
                            {{-- @else
                                <span class="text-danger  d-inline-block">{{ __('Out of stock') }}</span>
                            @endif --}}
                        </p>
                        <h3><span class="previous-price">Tk {{ $item->previous_price ?? '' }}</span><span
                                class="text-danger">Tk {{ $item->discount_price ?? '' }}</span></h3>
                        <p class="text-danger fw-bold">
                            @foreach (json_decode($item->specification_description) ?? [] as $spe)
                                * {{ $spe }} <br />
                            @endforeach
                        </p>
                        <p>{{ $item->sort_details ?? '' }}</p>
                        @php
                            $variantsIds = $item->iteamVariant->pluck('variant_id')->values()->all();
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
                                    @foreach ($sizes as $s)
                                        <input type="radio" id="size{{ $s->id }}" name="size"
                                            value="{{ $s->id }}"
                                            {{ isset($size) && strtolower($s->name) == strtolower($size) ? 'checked' : ($loop->first ? 'checked' : '') }}>
                                        <label for="size{{ $s->id }}">{{ $s->name }}</label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- Color -->

                        @php
                            $variantsIds = $item->iteamVariant->pluck('variant_id')->values()->all();
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
                                value="{{ $item->discount_price ?? $item->regular_price }}">
                            <label class="me-3"><strong>Quantity</strong></label>
                            <input type="number" id="qtyInput" class="form-control w-25 qtyValue" value="1"
                                min="1" />
                        </div>
                        <p><strong>Subtotal:</strong> ৳ <span id="subtotalDisplay"></span>
                        </p>
                        {{-- hidden inputs  --}}
                        <input type="hidden" value="{{ $item->id ?? '' }}" id="item_id">
                        <input type="hidden" id="demo_price" value="200">


                        <div class="d-flex">
                            <button class="btn btn-dark me-2  add_to_cartbtn" id="add_to_cart">ADD TO CART</button>
                            <a class="add-to-wishlist {{ isset($wishlists[$item->id]) ? 'active' : '' }}"
                                data-id="{{ $item->id }}">
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
                                        <a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">
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
                                    {!! $item->details !!}
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
                                    <a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i></a><a
                                        class="ps-next" href="#"><i class="ps-icon-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__content">
                        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                            data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false"
                            data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
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
                                data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
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
                                <img src="{{ asset('assets/images/size-chart-product_details.webp') }}"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.12.1/jquery.zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            // $('.gallery-thumb').on('click', function(e) {
            //     e.preventDefault(); // Image-ti direct open hote badha dibe

            //     let newSrc = $(this).attr('href'); // Gallery-r boro image path
            //     $('.image-detail-main-image').attr('src', newSrc); // Main image-e set korbe
            // });

            // // 2. Magnific Popup Logic (Main Image Click)
            // $('.image-detail-main-image').on('click', function() {
            //     let items = [{
            //         src: $(this).attr('src'),
            //         title: 'Main Image',
            //         type: 'image'
            //     }];

            //     // Gallery-r baki chobi gulo add kora
            //     $('.gallery-thumb').each(function() {
            //         let thumbSrc = $(this).attr('href');
            //         // Duplicate chobi bad dite chaile nicher condition use kora jay
            //         if (thumbSrc !== items[0].src) {
            //             items.push({
            //                 src: thumbSrc,
            //                 title: $(this).attr('title'),
            //                 type: 'image'
            //             });
            //         }
            //     });

            //     $.magnificPopup.open({
            //         items: items,
            //         gallery: {
            //             enabled: true
            //         },
            //         type: 'image',
            //         mainClass: 'mfp-with-zoom mfp-img-mobile',
            //         zoom: {
            //             enabled: true,
            //             duration: 300
            //         }
            //     });
            // });





            // --- ২. Wishlist Operations ---
            $(document).on('click', '.add-to-wishlist', function(e) {
                e.preventDefault();
                const $this = $(this);
                const itemId = $this.data('id');
                let url = "{{ route('user.wishlist.store', ['id' => 'ITEM_ID']) }}".replace('ITEM_ID',
                    itemId);

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        _token: csrfToken,
                        id: itemId
                    },
                    success: function(response) {
                        if (response.status === 0 && response.link) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Login Required',
                                text: "Wishlist-এ যোগ করার জন্য আপনাকে লগইন করতে হবে।",
                                confirmButtonText: 'Login'
                            }).then(() => window.location.href = response.link);
                        } else {
                            if (response.status === 1) $this.addClass('active');
                            else if (response.status === 2) $this.removeClass('active');

                            showToast(response.message, 'success');
                            updateWishlistCount();
                        }
                    },
                    error: () => showToast('Something went wrong. Please try again.', 'error')
                });
            });

            // ইনিশিয়াল কাউন্ট লোড
            updateWishlistCount();


            // --- ৩. Subtotal Calculation ---
            const qtyInput = document.getElementById('qtyInput');
            if (qtyInput) {
                qtyInput.addEventListener('input', updateSubtotal);
                updateSubtotal(); // ইনিশিয়াল ক্যালকুলেশন
            }
        });

        // --- ৪. Helper Functions (Global Scope) ---

        function updateWishlistCount() {
            $.ajax({
                url: "{{ route('user.wishlist.count') }}",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const count = response.count ?? 0;
                    $('#wishlist-count-header i, #wishlist-count-mobile i').text(count);
                },
                error: () => $('#wishlist-count-header i, #wishlist-count-mobile i').text(0)
            });
        }

        function updateSubtotal() {
            const price = parseFloat(document.getElementById('itemPrice')?.value || 0);
            const qty = parseInt(document.getElementById('qtyInput')?.value || 0);
            const display = document.getElementById('subtotalDisplay');

            if (display) {
                display.textContent = (qty < 1) ? '0.00' : (price * qty).toFixed(2);
            }
        }

        function showToast(message, icon = 'success') {
            Swal.fire({
                icon: icon,
                title: message,
                timer: 2000,
                showConfirmButton: false,
                toast: (icon === 'success'), // সাকসেস হলে টোস্ট মোড দেখাবে
                position: 'top-end'
            });
        }
    </script>

    {{-- <script>
        document.querySelectorAll('.zoom-wrapper').forEach(wrapper => {
            const img = wrapper.querySelector('.zoom-image');

            wrapper.addEventListener('mousemove', (e) => {
                const rect = wrapper.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                img.style.transformOrigin = `${x}% ${y}%`;
                img.style.transform = 'scale(2.5)';
            });

            wrapper.addEventListener('mouseleave', () => {
                img.style.transformOrigin = 'center center';
                img.style.transform = 'scale(1)';
            });
        });
    </script> --}}


    {{-- <script>
        $(document).ready(function() {

            // 1️⃣ Hover zoom
            $('.zoom-wrapper').on('mousemove', function(e) {
                const wrapper = $(this);
                const img = wrapper.find('.zoom-image');

                const offset = wrapper.offset();
                const x = ((e.pageX - offset.left) / wrapper.width()) * 100;
                const y = ((e.pageY - offset.top) / wrapper.height()) * 100;

                img.css({
                    'transform-origin': `${x}% ${y}%`,
                    'transform': 'scale(2)' // Zoom level
                });
            }).on('mouseleave', function() {
                $(this).find('.zoom-image').css({
                    'transform-origin': 'center center',
                    'transform': 'scale(1)'
                });
            });

            // 2️⃣ Gallery thumbnail click (update main image)
            $('.gallery-thumb').on('click', function(e) {
                e.preventDefault(); // Prevent new tab
                const newSrc = $(this).attr('href');
                $('.image-detail-main-image').attr('src', newSrc);
            });

            // 3️⃣ Main image click → Magnific Popup
            $('.image-detail-main-image').on('click', function(e) {
                const mainSrc = $(this).attr('src');

                let items = [{
                    src: mainSrc,
                    title: 'Main Image',
                    type: 'image'
                }];

                // Add gallery images
                $('.gallery-thumb').each(function() {
                    const thumbSrc = $(this).attr('href');
                    if (thumbSrc !== mainSrc) {
                        items.push({
                            src: thumbSrc,
                            title: $(this).attr('title') || '',
                            type: 'image'
                        });
                    }
                });

                $.magnificPopup.open({
                    items: items,
                    gallery: {
                        enabled: true
                    },
                    type: 'image',
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    zoom: {
                        enabled: true,
                        duration: 300
                    }
                });
            });

        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {

            const isMobile = /Android|iPhone|iPad|iPod|Windows Phone/i.test(navigator.userAgent);

            // 1️⃣ Hover zoom only for desktop
            if (!isMobile) {
                $(document).on('mousemove', '.zoom-wrapper', function(e) {
                    const wrapper = $(this);
                    const img = wrapper.find('.zoom-image');

                    const offset = wrapper.offset();
                    const x = ((e.pageX - offset.left) / wrapper.width()) * 100;
                    const y = ((e.pageY - offset.top) / wrapper.height()) * 100;

                    img.css({
                        'transform-origin': `${x}% ${y}%`,
                        'transform': 'scale(2)' // Zoom level
                    });
                });

                $(document).on('mouseleave', '.zoom-wrapper', function() {
                    $(this).find('.zoom-image').css({
                        'transform-origin': 'center center',
                        'transform': 'scale(1)'
                    });
                });
            }

            // 2️⃣ Gallery thumbnail click → update main image
            $(document).on('click', '.gallery-thumb', function(e) {
                e.preventDefault();
                const newSrc = $(this).attr('href');
                $('.image-detail-main-image').attr('src', newSrc);
            });

            // 3️⃣ Main image click → Magnific Popup
            $(document).on('click', '.image-detail-main-image', function(e) {
                const mainSrc = $(this).attr('src');

                let items = [{
                    src: mainSrc,
                    title: 'Main Image',
                    type: 'image'
                }];

                $('.gallery-thumb').each(function() {
                    const thumbSrc = $(this).attr('href');
                    if (thumbSrc !== mainSrc) {
                        items.push({
                            src: thumbSrc,
                            title: $(this).attr('title') || '',
                            type: 'image'
                        });
                    }
                });

                $.magnificPopup.open({
                    items: items,
                    gallery: {
                        enabled: true
                    },
                    type: 'image',
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    zoom: {
                        enabled: true,
                        duration: 300
                    }
                });
            });

        });
    </script> --}}


    <script>
        $(document).ready(function() {
            const isMobile = /Android|iPhone|iPad|iPod|Windows Phone/i.test(navigator.userAgent);
            // 1️⃣ Desktop Hover Zoom only
            if (!isMobile) {
                $(document).on('mousemove', '.zoom-wrapper', function(e) {
                    const wrapper = $(this);
                    const img = wrapper.find('.zoom-image');

                    const offset = wrapper.offset();
                    const x = ((e.pageX - offset.left) / wrapper.width()) * 100;
                    const y = ((e.pageY - offset.top) / wrapper.height()) * 100;

                    img.css({
                        'transform-origin': `${x}% ${y}%`,
                        'transform': 'scale(2)' // Zoom level
                    });
                });

                $(document).on('mouseleave', '.zoom-wrapper', function() {
                    $(this).find('.zoom-image').css({
                        'transform-origin': 'center center',
                        'transform': 'scale(1)'
                    });
                });
            }

            // 2️⃣ Gallery thumbnail click → update main image
            // 2️⃣ Gallery thumbnail click → update main image
            $(document).on('click', '.gallery-thumb', function(e) {
                e.preventDefault();
                const newSrc = $(this).attr('href');
                $('.image-detail-main-image').attr('src', newSrc);
            });

            // 3️⃣ Main image click → Magnific Popup
            // $(document).on('click touchend', '.image-detail-main-image', function(e) {
            //     // Prevent double trigger on mobile
            //     if (isMobile && e.type === 'click') return;
            //     e.preventDefault();

            //     const mainSrc = $(this).attr('src');

            //     let items = [{
            //         src: mainSrc,
            //         title: 'Main Image',
            //         type: 'image'
            //     }];

            //     $('.gallery-thumb').each(function() {
            //         const thumbSrc = $(this).attr('href');
            //         if (thumbSrc !== mainSrc) {
            //             items.push({
            //                 src: thumbSrc,
            //                 title: $(this).attr('title') || '',
            //                 type: 'image'
            //             });
            //         }
            //     });

            //     $.magnificPopup.open({
            //         items: items,
            //         gallery: {
            //             enabled: true
            //         },
            //         type: 'image',
            //         mainClass: 'mfp-with-zoom mfp-img-mobile',
            //         zoom: {
            //             enabled: true,
            //             duration: 300
            //         }
            //     });
            // });

            // 3️⃣ Main image click → Magnific Popup
            $(document).on('click', '.image-detail-main-image', function(e) {
                e.preventDefault();
                e.stopPropagation(); // অন্য কোনো ইভেন্টকে বাধা দিবে

                const mainSrc = $(this).attr('src');

                let items = [{
                    src: mainSrc,
                    title: 'Main Image',
                    type: 'image'
                }];

                $('.gallery-thumb').each(function() {
                    const thumbSrc = $(this).attr('href');
                    if (thumbSrc !== mainSrc) {
                        items.push({
                            src: thumbSrc,
                            title: $(this).attr('title') || '',
                            type: 'image'
                        });
                    }
                });

                $.magnificPopup.open({
                    items: items,
                    gallery: {
                        enabled: true
                    },
                    type: 'image',
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    // মোবাইলে ফোকাস ইস্যু ঠিক করতে নিচের লাইনটি যোগ করুন
                    callbacks: {
                        open: function() {
                            $('body').addClass('noscroll');
                        },
                        close: function() {
                            $('body').removeClass('noscroll');
                        }
                    }
                });
            });

        });
    </script>
@endpush
