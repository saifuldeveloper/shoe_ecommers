@extends('master.front')
@section('content')
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                @php $sliders = App\Models\Slider::get(); @endphp
                @foreach ($sliders as $slider)
                    <li class="ps-banner {{ $loop->iteration % 2 == 0 ? 'ps-banner--white' : '' }}" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-{{ $loop->iteration }}" data-rotate="0"
                        data-slotamount="default" data-transition="random">
                        <img alt="Slider Image" class="rev-slidebg" data-bgfit="cover" data-bgparallax="5"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ $slider->photo ? asset('storage/slider/' . $slider->photo) : asset('img/default.png') }}" />
                    
                        <div class="tp-caption ps-banner__header"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-y="middle" id="layer-{{ $loop->iteration }}">
                            <p>{{ $slider->title }}</p>
                        </div>
                        <div class="tp-caption ps-banner__description"
                            data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-y="middle" id="layer-desc-{{ $loop->iteration }}">
                            <p>{{ $slider->description }}</p>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="ps-section pt-35">
        <div class="ps-container">
            <div class="ps-section__content pb-35">
                <div class="row g-4">
                    @foreach ($featuredCategories as $category)
                        <div class="col-sm-6 col-xs-6 col-lg-3 col-xs-6">
                            <a class="ps-offer d-block"   href="{{ route('front.categories.products', ['slug'=>$category->slug]) }}">
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
            <div class="ps-section__content pb-35">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="ps-offer d-block"
                            href="{{ route('front.campaign') }}">
                            <img src="{{ asset('storage/banner/' . $heroBanner['img1']) }}"
                                alt="{{ $heroBanner['title1'] ?? '' }}" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-section">
        <div class="ps-container">
            <div class="ps-section__content">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="ps-offer d-block"
                              href="{{ route('front.campaign') }}">
                            <img src="{{ asset('storage/banner/' . $heroBanner['img2']) }}"
                                alt="{{ $heroBanner['title2'] ?? '' }}" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @php 
    $products = App\Models\Item::with( 'itemVariants.variant.color', 'itemVariants.variant.size')
        ->where('status', 1)
        ->orderBy('id', 'DESC')
        ->get();

          $sizes = $products->flatMap(function ($product) {
                    return $product->itemVariants->pluck('variant.size.name')->filter();
                })->unique()->values();
    @endphp
    <div class="ps-section--features-product ps-section masonry-root pb-30">
        <div class="ps-container">
            <div class="ps-section__header pb-40">
                <h3 class="ps-section__title">- Features Products</h3>

                <ul class="ps-masonry__filter">
                    <li class="current">
                        <a data-filter="*" href="#">All <sup>{{ $featured_items->count() }}</sup></a>
                    </li>
                    @foreach ($menuCategories as $cat)
                        @php
                            $count = $featured_items->where('category_id', $cat->id)->count();
                        @endphp

                        @if ($count > 0)
                            <li>
                                <a data-filter=".{{ Str::slug($cat->slug) }}" href="#">
                                    {{ $cat->name }} <sup>{{ $count }}</sup>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="ps-section__content">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                    data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach ($featured_items as $item)
                            <div class="grid-item {{ Str::slug($item->category->slug ?? '') }}">
                                <div class="grid-item__content-wrapper">
                                    <a target="__blank"  href="{{ route('front.product', $item->slug) }}">
                                        <div class="ps-shoe mb-30">
                                            <a target="__blank" href="{{ route('front.product', $item->slug) }}">
                                                <div class="ps-shoe__thumbnail">
                                                    <img alt="" src="{{ asset('storage/items/' . $item->photo ?? '') }}" />
                                                    <img class="hover-img" src="{{ asset('storage/items/' . $item->photo ?? '') }}"alt="">
                                                    <a class="ps-shoe__favorite add-to-wishlist"data-id="{{ $item->id }}"><i class="ps-icon-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="ps-shoe__content">
                                                    <div class="ps-shoe__detail">
                                                        <a  class="ps-shoe__name"  href="{{ route('front.product', $item->slug) }}" target="__blank">{{ $item->name ?? '' }}</a>
                                                        <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price ?? '' }}</span></div>
                                                    </div>
                                                    <div class="ps-shoe__variants">
                                                        <div>
                                                            <div class="text-center pb-10">
                                                                    <p class="ps-shoe__categories pb-5">
                                                                        @foreach ($item->unique_sizes as $size)
                                                                      <a  href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                                class="#" target="__blank">{{ $size }}</a> 
                                                                        
                                                                        @endforeach
                                                                    </p>
                                                                </div>
                                                            <a  href="{{ route('front.product', $item->slug) }}"
                                                                class="btn btn-dark shop-now-button" target="__blank">Shop now</a>
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
    </div>



    <div class="ps-section pt-35">
        <div class="ps-container">
            <div class="ps-section__content pb-35">
                <div class="row g-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                        <a target="__blank" class="ps-offer d-block"
                              href="{{ route('front.campaign') }}">
                           
                            <img src="{{ asset('storage/banner/' . $thirdBanner['img1']) }}"
                                alt="{{ $thirdBanner['title1'] ?? '' }}" class="img-fluid" />
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                        <a target="__blank" class="ps-offer d-block"
                              href="{{ route('front.campaign') }}">
                            <img src="{{ asset('storage/banner/' . $thirdBanner['img2']) }}"
                                alt="{{ $thirdBanner['title2'] ?? '' }}" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="ps-section--sale-off ps-section">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3 class="ps-section__title" data-mask="Sale off">
                    - Hot Deal Today
                </h3>
            </div>

            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="ps-hot-deal">
                            <h3>Nike DUNK Max 95 OG</h3>

                            <p class="ps-hot-deal__price">
                                Only: <span>&pound;155</span>
                            </p>

                            <ul class="ps-countdown" data-time="December 30, 2017 15:37:25">
                                <li>
                                    <p>Hours</p>
                                </li>
                                <li class="divider">:</li>
                                <li>
                                    <p>minutes</p>
                                </li>
                                <li class="divider">:</li>
                                <li>
                                    <p>Seconds</p>
                                </li>
                            </ul>
                            <a class="ps-btn" href="#">Order Today</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="ps-hotspot">
                            <div class="ps-hotspot__content">
                                <p class="heading">
                                    <a class="point first active" href="javascript:;">JUMP TO HEADER</a>
                                </p>

                                <p>
                                    <a class="point first active" href="javascript:;">Dynamic Fit Collar en la zona del
                                        tobillo que une la
                                        parte inferior de la pierna y el pie sin reducir la
                                        libertad de movimiento.</a>
                                </p>
                            </div>

                            <div class="ps-hotspot__content">
                                <p class="heading">
                                    <a class="point second" href="javascript:;">JUMP TO HEADER</a>
                                </p>

                                <p>
                                    <a class="point second" href="javascript:;">Dynamic Fit Collar en la zona del tobillo
                                        que une la
                                        parte inferior de la pierna y el pie sin reducir la
                                        libertad de movimiento.</a>
                                </p>
                            </div>

                            <div class="ps-hotspot__content">
                                <p class="heading">
                                    <a class="point third" href="javascript:;">JUMP TO HEADER</a>
                                </p>

                                <p>
                                    <a class="point third" href="javascript:;">Dynamic Fit Collar en la zona del tobillo
                                        que une la
                                        parte inferior de la pierna y el pie sin reducir la
                                        libertad de movimiento.</a>
                                </p>
                            </div>
                            <img alt="" src="{{ asset('assets/frontend/images/hot-deal.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @php 
    $products = App\Models\Item::with( 'itemVariants.variant.color', 'itemVariants.variant.size')
        ->where('status', 1)
        ->orderBy('id', 'DESC')
        ->get();

          $sizes = $products->flatMap(function ($product) {
                    return $product->itemVariants->pluck('variant.size.name')->filter();
                })->unique()->values();
    @endphp

    <div class="ps-section ps-section--top-sales ps-owl-root">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h3 class="ps-section__title">- New Arrival</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="ps-owl-actions">
                            <a  style="color:#f59b34" href="{{ route('front.new.products') }}">
                                View All
                            </a>
                                 <a class="ps-prev" href="#">Prev</a><a class="ps-next" href="#">Next</a>
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
                                        <img alt="" src="{{ asset('storage/items/' . $item->photo) }}" />
                                        <img class="hover-img" src="{{ asset('storage/items/' . $item->photo) }}"
                                            alt="">
                                        <a class="ps-shoe__favorite add-to-wishlist" data-id="{{ $item->id }}">
                                            <i class="ps-icon-heart"></i>
                                        </a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__detail">
                                            <a class="ps-shoe__name" href="#">{{ $item->name }}</a>
                                            <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price }}</span>
                                            </div>
                                        </div>

                                        <div class="ps-shoe__variants">

                                            <div class="text-center pb-10">
                                                <p class="ps-shoe__categories pb-5">
                                                   {{-- @php  dd($item) @endphp --}}
                                                    @foreach ($item->unique_sizes as $size)
                                              
                                                     <a target="__blank" href="{{ route('front.product', ['slug' => $item->slug]) }}?size={{ $size }}"
                                                                class="#">{{ $size }}</a> 
                                                    {{-- <a href="{{ route('front.categories.products', ['slug' => $item->category?->slug]) }}?constraint={{ strtolower($size) }}">  {{ $size }} </a> --}}
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div>
                                              
                                                <a href="{{ route('front.product', $item->slug) }}" target="__blank">
                                                    <span class="btn btn-dark shop-now-button">Shop now</span>
                                                </a>
                                            </div>
                                            {{-- @if ($item->unique_colors->isNotEmpty())
                                                <div class="text-center pb-2">
                                                    <p class="ps-shoe__categories">
                                                        @foreach ($item->unique_colors as $color)
                                                            <span
                                                                style="
                                                                    display: inline-block;
                                                                    width: 20px;
                                                                    height: 20px;
                                                                    border-radius: 50%;
                                                                    background-color: {{ $color }};
                                                                    border: 1px solid #ddd;
                                                                    margin: 0 3px;
                                                                "
                                                                title="{{ $color }}"
                                                            ></span>
                                                        @endforeach
                                                    </p>
                                                </div>
                                            @endif --}}
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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
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
                                    <a class="ps-post__title"
                                        href="{{ route('front.blog.details', $post->slug) }}">{{ $post->title }}</a>

                                    <p class="ps-post__meta">
                                        <span>By:<a class="mr-5" href="#">Avijatry</a></span>
                                        -<span class="ml-5">{{ $post->created_at->format('M d, Y') }}</span>
                                    </p>

                                    <p>

                                        {{ Illuminate\Support\Str::words($post->details, 20, '...') }}
                                    </p>
                                    <a class="ps-morelink" href="{{ route('front.blog.details', $post->slug) }}">Read
                                        more</a>
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
            <div class="ps-section__header">
                <h2 class="ps-section__title">Avijatri On Social Media</h2>
            </div>
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

    <div class="ps-home-contact">
        <div id="contact-map" style="display:none;"></div>
    </div>
@endsection





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
                        } else if (response.status === 1 || response.status === 2) {
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
