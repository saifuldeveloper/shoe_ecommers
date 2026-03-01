@extends('master.front')
@section('content')
    <div class="ps-banner">
        <div class="swiper homeSwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <a href="{{ $slider->link }}">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="{{ asset('storage/slider/' . $slider->mobile_photo) }}">
                                <img src="{{ asset('storage/slider/' . $slider->photo) }}" alt="{{ $slider->title }}"
                                    loading="{{ $loop->first ? 'eager' : 'lazy' }}">
                            </picture>
                        </a>
                        <div class="banner-content">
                            <h2>{{ $slider->title }}</h2>
                            <p>{{ $slider->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- arrows -->
            {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="ps-section pt-35">
        <div class="ps-container">
            <div class="ps-section__content">
                <div class="row g-4">
                    @foreach ($bannerCategories as $category)
                        <div class="col-sm-6 col-xs-6 col-lg-3 col-xs-6 home home-category-banner">
                            <a class="ps-offer d-block home_category" 
                                href="{{ route('front.categories.products', ['slug' => $category->slug]) }}">
                                <img src="{{ asset('storage/category/' . $category->photo) }}" alt="{{ $category->name }}"
                                    class="img-fluid" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section">
        <div class="ps-container">
            <div class="ps-section__content">
                <div class="row g-4">
                    <div class="col-12 col-sm-12 col-lg-12">
                        @foreach ($firstBanners as $banner)
                            @php
                                $unqiue_slug = basename($banner->url_first);
                            @endphp
                            <a class="ps-offer d-block" href="{{ route('products.campaign.unique', $unqiue_slug) }}">
                                <img src="{{ $banner->banner_first
                                    ? (file_exists(public_path('storage/' . $banner->banner_first))
                                        ? url('storage/' . $banner->banner_first)
                                        : url('assets/images/' . $banner->banner_first))
                                    : url('assets/images/default.jpg') }}"
                                    alt="{{ $banner->banner_first }}" class="img-fluid" style="padding-top: 35px;" />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @php
        $products = App\Models\Item::with('itemVariants.variant.color', 'itemVariants.variant.size')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        $sizes = $products
            ->flatMap(function ($product) {
                return $product->itemVariants->pluck('variant.size.name')->filter();
            })
            ->unique()
            ->values();
    @endphp --}}
    {{-- <div class="ps-section--features-product ps-section masonry-root pb-30">
        <div class="ps-container">
            <div class="ps-section__header pb-40">
                <div class="row">
                    <div class="col-md-12 col-sm-12  col-lg-12">
                        <h3 class="ps-section__title">- Features Products</h3>
                        <ul class="ps-masonry__filter">
                            <li class="current">
                                <a data-filter="*" href="javascript:void(0)">All <sup>{{ $featured_items->count() }}</sup></a>
                            </li>
                            @foreach ($featuredCategories as $cat)
                                @php
                                    $count = $featured_items->where('category_id', $cat->id)->count();
                                @endphp
                                @if ($count > 0)
                                    <li>
                                        <a data-filter=".{{ Str::slug($cat->slug) }}" href="javascript:void(0)">
                                            {{ $cat->name }} <sup>{{ $count }}</sup>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                    data-radio="100%">
                    <div class="ps-masonry" style="display: flex; flex-wrap: wrap;">
                        <div class="grid-sizer"></div>
                        @foreach ($featured_items as $item)
                            <div class="grid-item {{ Str::slug($item->category->slug ?? '') }}">
                                <div class="grid-item__content-wrapper">
                                    <a target="__blank" href="{{ route('front.product', $item->slug) }}">
                                        <div class="ps-shoe mb-30">
                                            <a target="__blank" href="{{ route('front.product', $item->slug) }}">
                                                <div class="ps-shoe__thumbnail">
                                                    <img alt="{{ $item->photo }}" class="ps-product-image" loading="lazy"
                                                        width="400" height="400"
                                                        src="{{ asset('storage/items/' . $item->photo ?? '') }}" />
                                                    <img class="hover-img" loading="lazy" width="400" height="400"
                                                        class="ps-product-image"
                                                        src="{{ asset('storage/items/' . $item->photo ?? '') }}"alt="{{ $item->photo }}">
                                                    <a class="ps-shoe__favorite add-to-wishlist {{ isset($wishlists[$item->id]) ? 'active' : '' }}"
                                                        data-id="{{ $item->id }}"><i class="ps-icon-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="ps-shoe__content">
                                                    <div class="ps-shoe__detail">
                                                        <a class="ps-shoe__name"
                                                            href="{{ route('front.product', $item->slug) }}"
                                                            target="__blank">{{ $item->name ?? '' }}</a>
                                                        <div> <span class="ps-shoe__price"> &#2547;
                                                                {{ $item->discount_price ?? '' }}</span></div>
                                                    </div>
                                                    <div class="ps-shoe__variants">
                                                        <div>
                                                            <div class="text-center pb-10">
                                                                <p class="ps-shoe__categories pb-5">
                                                                    @foreach ($item->unique_sizes as $size)
                                                                        <a href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                                            class="#"
                                                                            target="__blank">{{ $size }}</a>
                                                                    @endforeach
                                                                </p>
                                                            </div>
                                                            <a href="{{ route('front.product', $item->slug) }}"
                                                                class="btn btn-dark shop-now-button" target="__blank">Shop
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="ps-section--features-product ps-section ps-owl-root pb-30">
        <div class="ps-container">
            <div class="ps-section__header pb-40">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="ps-section__title">- Featured Products</h3>
                        <ul class="ps-masonry__filter" id="bata-filter">
                            @foreach ($featuredCategories as $cat)
                                @php
                                    $count = $featured_items->where('category_id', $cat->id)->count();
                                @endphp
                                @if ($count > 0)
                                    <li>
                                        <a data-filter=".{{ Str::slug($cat->slug) }}" href="javascript:void(0)">
                                            {{ $cat->name }} <sup>{{ $count }}</sup>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Preloader -->
            <div id="featured-preloader" style="text-align:center; display:none; padding:50px;">
                <i class="fas fa-spinner fa-spin" style="font-size:30px; color:#f59b34;"></i>
            </div>
            
            <div class="ps-section__content">
                <div id="featured-product-owl" class="owl-carousel ps-owl--colection processing-mode" data-owl-auto="true"
                    data-owl-dots="false" data-owl-duration="1000" data-owl-item="4" data-owl-item-lg="4"
                    data-owl-item-md="3" data-owl-item-sm="2" data-owl-item-xs="2" data-owl-loop="true"
                    data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000" style="transition: opacity 0.3s ease;">
                    @foreach ($featured_items as $item)
                        <div class="ps-shoes--carousel featured-item-slide {{ Str::slug($item->category->slug ?? '') }}">
                            <div class="ps-shoe">
                                <a target="__blank" href="{{ route('front.product', ['slug' => $item->slug]) }}">
                                    <div class="ps-shoe__thumbnail">
                                        <img alt="{{ $item->photo }}" src="{{ asset('storage/items/' . $item->photo) }}"
                                            class="ps-product-image" loading="lazy" width="400" height="400" />
                                        <img class="hover-img" src="{{ asset('storage/items/' . $item->photo) }}"
                                            class="ps-product-image" loading="lazy" width="400" height="400"
                                            alt="{{ $item->photo }}">
                                        <a class="ps-shoe__favorite add-to-wishlist {{ isset($wishlists[$item->id]) ? 'active' : '' }}"
                                            data-id="{{ $item->id }}">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__detail">
                                            <a class="ps-shoe__name" href="javascript:void(0)">{{ $item->name }}</a>
                                            <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price }}</span>
                                            </div>
                                        </div>
                                        <div class="ps-shoe__variants text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                @foreach ($item->unique_sizes as $size)
                                                    <a target="__blank"
                                                        href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                        class="#">{{ $size }}</a>
                                                @endforeach
                                            </p>
                                            <div>
                                                <a href="{{ route('front.product', $item->slug) }}" target="__blank">
                                                    <span class="btn btn-dark shop-now-button">Shop now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 text-right">
                    <div class="ps-owl-actions" style="padding-right: 16px;">
                        <a target="__blank" style="color:#f59b34;padding-right:15px;"
                            href="{{ route('front.featured.products') }}">
                            View All
                        </a>
                        <a class="ps-prev" href="javascript:void(0)">&#10094;</a><a class="ps-next"
                            href="javascript:void(0)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ps-section pt-35">
        <div class="ps-container">
            <div class="ps-section__content pb-35">
                <div class="row">
                    @foreach ($secondBanners as $banner)
                        @php
                            $unique_slug = basename($banner->url_second);
                        @endphp
                        <div class="col-6 col-md-6 col-sm-6 mb-3">
                            <a class="ps-offer d-block" href="{{ route('products.campaign.unique', $unique_slug) }}">
                                <img src="{{ $banner->banner_second
                                    ? (file_exists(public_path('storage/' . $banner->banner_second))
                                        ? url('storage/' . $banner->banner_second)
                                        : url('assets/images/' . $banner->banner_second))
                                    : url('assets/images/default.jpg') }}"
                                    alt="{{ $banner->banner_second }}" class="img-fluid w-100"
                                    style="padding-top: 30px;" />
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <h3 class="ps-section__title">- New Arrival</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="ps-owl-actions">
                            <a target="__blank" style="color:#f59b34;padding-right:15px;"
                                href="{{ route('front.new.products') }}">
                                View All
                            </a>
                            <a class="ps-prev" href="javascript:void(0)">&#10094;</a><a class="ps-next"
                                href="javascript:void(0)">&#10095;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-dots="false"
                    data-owl-duration="1000" data-owl-gap="30" data-owl-item="4" data-owl-item-lg="4"
                    data-owl-item-md="3" data-owl-item-sm="2" data-owl-item-xs="2" data-owl-loop="true"
                    data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000">
                    @foreach ($newArrivalItems as $item)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
                                <a target="__blank" href="{{ route('front.product', ['slug' => $item->slug]) }}">
                                    <div class="ps-shoe__thumbnail">
                                        {{-- <div class="ps-badge"><span>New</span></div> --}}
                                        <img alt="{{ $item->photo }}"
                                            src="{{ asset('storage/items/' . $item->photo) }}" class="ps-product-image"
                                            loading="lazy" width="400" height="400" />
                                        <img class="hover-img" src="{{ asset('storage/items/' . $item->photo) }}"
                                            class="ps-product-image" loading="lazy" width="400" height="400"
                                            alt="{{ $item->photo }}">
                                        <a class="ps-shoe__favorite add-to-wishlist {{ isset($wishlists[$item->id]) ? 'active' : '' }}"
                                            data-id="{{ $item->id }}">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__detail">
                                            <a class="ps-shoe__name" href="javascript:void(0)">{{ $item->name }}</a>
                                            <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price }}</span>
                                            </div>
                                        </div>

                                        <div class="ps-shoe__variants">

                                            <div class="text-center pb-10">
                                                <p class="ps-shoe__categories pb-5">
                                                    @foreach ($item->unique_sizes as $size)
                                                        <a target="__blank"
                                                            href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                            class="#">{{ $size }}</a>
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div>
                                                <a href="{{ route('front.product', $item->slug) }}" target="__blank">
                                                    <span class="btn btn-dark shop-now-button">Shop now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- /// top selling products --}}

    <div class="ps-section ps-section--top-sales ps-owl-root">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <h3 class="ps-section__title">- Top Products</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="ps-owl-actions">
                            {{-- <a target="__blank"  style="color:#f59b34;padding-right:15px;" href="{{ route('front.top-sell.products') }}">
                                View All
                            </a> --}}
                            {{-- <a class="ps-prev" href="javascript:void(0)">Prev</a><a class="ps-next" href="javascript:void(0)">Next</a> --}}
                            <a class="ps-prev" href="javascript:void(0)">&#10094;</a><a class="ps-next"
                                href="javascript:void(0)">&#10095;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-dots="false"
                    data-owl-duration="1000" data-owl-gap="30" data-owl-item="4" data-owl-item-lg="4"
                    data-owl-item-md="3" data-owl-item-sm="2" data-owl-item-xs="2" data-owl-loop="true"
                    data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000">

                    @foreach ($manulTopItems as $item)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
                                <a target="__blank" href="{{ route('front.product', ['slug' => $item->slug]) }}">
                                    <div class="ps-shoe__thumbnail">
                                        {{-- <div class="ps-badge"><span>New</span></div> --}}
                                        <img alt="{{ $item->photo }}"
                                            src="{{ asset('storage/items/' . $item->photo) }}" class="ps-product-image"
                                            loading="lazy" width="400" height="400" />
                                        <img class="hover-img" src="{{ asset('storage/items/' . $item->photo) }}"
                                            class="ps-product-image" loading="lazy" width="400" height="400"
                                            alt="{{ $item->photo }}">
                                        <a class="ps-shoe__favorite add-to-wishlist {{ isset($wishlists[$item->id]) ? 'active' : '' }}"
                                            data-id="{{ $item->id }}">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__detail">
                                            <a class="ps-shoe__name" href="javascript:void(0)">{{ $item->name }}</a>
                                            <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price }}</span>
                                            </div>
                                        </div>

                                        <div class="ps-shoe__variants">

                                            <div class="text-center pb-10">
                                                <p class="ps-shoe__categories pb-5">

                                                    @foreach ($item->unique_sizes as $size)
                                                        <a target="__blank"
                                                            href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                            class="#">{{ $size }}</a>
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div>

                                                <a href="{{ route('front.product', $item->slug) }}" target="__blank">
                                                    <span class="btn btn-dark shop-now-button">Shop now</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- //blog section --}}
    <div class="ps-section ps-home-blog">
        <div class="ps-container">
            <div class="ps-section__header">
                <h2 class="ps-section__title">- Our Story</h2>
                <div class="ps-section__action">
                    <a class="ps-morelink text-uppercase" href="{{ route('front.blog') }}">View all post</a>
                </div>
            </div>

            <div class="ps-section__content">
                <div class="row">
                    @foreach ($posts ?? [] as $post)
                        @php
                            $photos = json_decode($post->photo, true);
                        @endphp
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="ps-post">
                                <div class="ps-post__thumbnail">
                                    @if (!empty($photos) && count($photos) > 0)
                                        @foreach ($photos as $img)
                                            <img alt="" src="{{ Storage::url('blog/' . $img) }}" />
                                        @endforeach
                                    @else
                                        <img alt="default" src="{{ asset('assets/images/default.jpg') }}" />
                                    @endif
                                </div>

                                <div class="ps-post__content">
                                    {{-- <a class="ps-post__title"
                                        href="{{ route('front.blog.details', $post->slug) }}"></a>
                                        {{ $post->title }} --}}
                                    <a class="ps-post__title" href="{{ $post->campain_url }}">{{ $post->title }}</a>


                                    <p class="ps-post__meta">
                                        <span>By:<a class="mr-5" href="javascript:void(0)">Avijatry</a></span>
                                        -<span class="ml-5">{{ $post->created_at->format('M d, Y') }}</span>
                                    </p>

                                    <p>

                                        {{ Illuminate\Support\Str::words($post->details, 20, '...') }}
                                    </p>
                                    {{-- <a class="ps-morelink" href="{{ route('front.blog.details', $post->slug) }}">Read
                                        more</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="ps-home-partner pb-50">
        <div class="ps-container">
            <div class="ps-section__header ">
                <h2 class="ps-section__title home-social-media-title">Avijatri On Social Media</h2>
            </div>
            <div class="social-medial-post">
                <div class="owl-slider" data-owl-auto="true" data-owl-dots="false" data-owl-duration="1000"
                    data-owl-gap="40" data-owl-item="6" data-owl-item-lg="6" data-owl-item-md="5" data-owl-item-sm="4"
                    data-owl-item-xs="2" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="false"
                    data-owl-speed="5000">

                    @foreach ($socialPosts as $post)
                        <a href="{{ $post->url }}" target="_blank">
                            <img alt="" src="{{ asset('storage/socialMediaPost/' . $post->photo) }}" />
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div class="ps-home-contact">
        <div id="contact-map" style="display:none;"></div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // for slider js 
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".homeSwiper", {
                loop: true,
                speed: 500,
                effect: "fade",
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                preloadImages: true,
                lazy: true,
            });
        });

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
                                timer: 2000,
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
                                timer: 2000,
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
            try {
                let url = '{{ route('user.wishlist.count') }}';

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response)
                        if (response.count !== undefined) {
                            $('#wishlist-count-header i').text(response.count);

                            $('#wishlist-count-mobile i').text(response.count);
                        }
                    },
                    error: function(xhr) {
                        // console.log("Error status:", xhr.status);
                        $('#wishlist-count-header i').text(0);
                        $('#wishlist-count-mobile i').text(0);
                    }
                });
            } catch (e) {
                console.warn("Wishlist count route not found or error in script:", e);
            }
        }



        // Optional: Load count on page load
        updateWishlistCount();
    </script>



    {{-- <script>
        $(document).ready(function() {
            const $owlContainer = $('#featured-product-owl');
            const allItemsHtml = $owlContainer.html(); // Save original items
            function initFeaturedSlider() {
                $owlContainer.owlCarousel({
                    loop: false, // Bata style usually uses false for filtered lists
                    margin: 20,
                    nav: false, // Custom nav used below
                    dots: false,
                    autoplay: true,
                    stagePadding: 5,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 2,
                            stagePadding: 10
                        },
                        480: {
                            items: 2,
                            stagePadding: 10
                        },
                        768: {
                            items: 3,
                            stagePadding: 15
                        },
                        992: {
                            items: 4,
                            stagePadding: 15
                        }
                    }
                });
            }

            // Initialize on load
            initFeaturedSlider();

            // Custom Navigation
            $('.featured-owl-next').click(function(e) {
                e.preventDefault();
                $owlContainer.trigger('next.owl.carousel');
            });
            $('.featured-owl-prev').click(function(e) {
                e.preventDefault();
                $owlContainer.trigger('prev.owl.carousel');
            });

            // Bata-style Smooth Filtering
            $('#bata-filter a').on('click', function(e) {
                e.preventDefault();
                const $this = $(this);
                const filterValue = $this.attr('data-filter');

                // Update UI
                $('#bata-filter li').removeClass('current');
                $this.parent().addClass('current');

                // Destroy and Re-build
                $owlContainer.trigger('destroy.owl.carousel').removeClass('owl-loaded owl-drag');
                $owlContainer.html(allItemsHtml);

                if (filterValue !== '*') {
                    $owlContainer.find('.featured-item-slide').not(filterValue).remove();
                }

                initFeaturedSlider();
            });
        });
    </script> --}}


    <script>
      $(document).ready(function() {
    const $owlContainer = $('#featured-product-owl');
    const $preloader = $('#featured-preloader');
    const allItemsHtml = $owlContainer.html();

    function initFeaturedSlider() {
        $owlContainer.owlCarousel({
            loop: false,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 2, stagePadding: 10 },
                768: { items: 3, stagePadding: 15 },
                992: { items: 4, stagePadding: 15 }
            },
            onInitialized: function() {
                // স্লাইডার তৈরি হয়ে গেলে প্রি-লোডার হাইড হবে এবং স্লাইডার শো করবে
                $preloader.hide(); 
                $owlContainer.css('opacity', '1'); 
                $owlContainer.removeClass('processing-mode');
            }
        });
    }

    // Start initially
    $owlContainer.css('opacity', '0'); // শুরুতে হাইড করে রাখা
    $preloader.show();
    initFeaturedSlider();

    // Filter button click
    $('#bata-filter a').on('click', function(e) {
        e.preventDefault();
        const $this = $(this);
        const filterValue = $this.attr('data-filter');

        // ফিল্টার ক্লিকের সাথে সাথে কন্টেন্ট হাইড এবং প্রি-লোডার শো
        $owlContainer.css('opacity', '0');
        $preloader.show();
        $owlContainer.addClass('processing-mode');

        setTimeout(function() {
            $owlContainer.trigger('destroy.owl.carousel').removeClass('owl-loaded owl-drag');
            $owlContainer.html(allItemsHtml);

            if (filterValue !== '*') {
                $owlContainer.find('.featured-item-slide').not(filterValue).remove();
            }

            initFeaturedSlider();
        }, 400); // সামান্য সময় দেওয়া যাতে স্মুথ মনে হয়

        // Active class
        $('#bata-filter li').removeClass('current');
        $this.parent().addClass('current');
    });

    // Custom nav
    $('.ps-next').click(function() { $owlContainer.trigger('next.owl.carousel'); });
    $('.ps-prev').click(function() { $owlContainer.trigger('prev.owl.carousel'); });
});
    </script>
@endpush
