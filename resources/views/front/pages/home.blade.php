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
                    @foreach($featuredCategories as $category)
                        <div class="col-sm-6 col-xs-6 col-lg-3 col-xs-6">
                            <a class="ps-offer d-block" href="#">
                                <img src="{{ asset('storage/category/' . $category->photo) }}" 
                                    alt="{{ $category->name }}" 
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
                        <a class="ps-offer d-block" href="product-detail.html">
                            <img src="{{ asset('assets/frontend/images/offer/image5.webp') }}" alt=""
                                class="img-fluid" />
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
                        <a class="ps-offer d-block" href="product-detail.html">
                            <img src="{{ asset('assets/frontend/images/offer/image6.webp') }}" alt=""
                                class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-section--features-product ps-section masonry-root pb-20">
        <div class="ps-container">
            <div class="ps-section__header pb-40">
                <h3 class="ps-section__title">- Features Products</h3>

                <ul class="ps-masonry__filter">
                    <li class="current">
                        <a data-filter="*" href="#">All <sup>8</sup></a>
                    </li>
                    <li>
                        <a data-filter=".nike" href="#">Nike <sup>1</sup></a>
                    </li>
                    <li>
                        <a data-filter=".adidas" href="#">Adidas <sup>1</sup></a>
                    </li>
                    <li>
                        <a data-filter=".men" href="#">Men <sup>1</sup></a>
                    </li>
                    <li>
                        <a data-filter=".women" href="#">Women <sup>1</sup></a>
                    </li>
                    <li>
                        <a data-filter=".kids" href="#">Kids <sup>4</sup></a>
                    </li>
                </ul>
            </div>

            <div class="ps-section__content">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                    data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach ($featured_items as $item)
                         <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <a href="{{ route('front.product', $item->slug) }}">
                                    <div class="ps-shoe mb-30">
                                        <a href="{{ route('front.product', $item->slug) }}">
                                            <div class="ps-shoe__thumbnail">
                                                <div class="ps-badge"><span>New</span></div>
                                                <img alt=""
                                                    src="{{ asset('storage/items/' . $item->photo??"") }}" />
                                                <img class="hover-img"
                                                    src="{{ asset('storage/items/' . $item->photo??"") }}"
                                                    alt="">
                                                <a class="ps-shoe__favorite" href="#"><i
                                                        class="ps-icon-heart"></i></a>
                                            </div>
                                            <div class="ps-shoe__content">
                                                <div class="ps-shoe__detail">
                                                    <a class="ps-shoe__name" href="{{ route('front.product', $item->slug) }}">{{ $item->name??""}}</a>
                                                    <div> <span class="ps-shoe__price"> &#2547; {{ $item->discount_price??"" }}</span></div>
                                                </div>

                                                <div class="ps-shoe__variants">
                                                    <div>
                                                        <a href="{{ route('front.product', $item->slug) }}" class="btn btn-dark shop-now-button">shop now</a>
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
                        <a class="ps-offer d-block" href="product-detail.html">
                            <img src="{{ asset('assets/frontend/images/category/one (1).jpg') }}" alt=""
                                class="img-fluid" />
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                        <a class="ps-offer d-block" href="product-detail.html">
                            <img src="{{ asset('assets/frontend/images/category/two.jpg') }}" alt=""
                                class="img-fluid" />
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

    <div class="ps-section ps-section--top-sales ps-owl-root">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h3 class="ps-section__title">- Top Sales</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="ps-owl-actions">
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
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/l1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/f1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/g1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/h1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/e1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <a href="{{ route('front.product', 'product-details') }}">
                                <div class="ps-shoe__thumbnail">
                                    {{-- <div class="ps-badge"><span>New</span></div> --}}
                                    <img alt="" src="{{ asset('assets/frontend/images/shoe/g1.avif') }}" />
                                    <img class="hover-img" src="{{ asset('assets/frontend/images/shoe/a1.avif') }}"
                                        alt="">
                                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                        <div> <span class="ps-shoe__price"> &#2547; 120</span></div>
                                    </div>

                                    <div class="ps-shoe__variants">
                                        <div class="text-center pb-10">
                                            <p class="ps-shoe__categories pb-5">
                                                <span>5</span> <span>6</span> <span>7</span> <span>8</span>
                                            </p>
                                        </div>
                                        <div>
                                            <span class="btn btn-dark shop-now-button">shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    @foreach ($posts ?? [] as $post )       
                    @php
                        $photos = json_decode($post->photo, true);
                    @endphp            
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail">
                              @if(!empty($photos) && count($photos) > 0)
                                @foreach($photos as $img)
                                    <img class="blog_image" alt="" src="{{ Storage::url('blog/' . $img) }}" />
                                @endforeach
                            @else
                                <img alt="default" src="{{ asset('assets/images/default.jpg') }}" />
                            @endif
                            </div>

                            <div class="ps-post__content">
                                <a class="ps-post__title" href="{{ route('front.blog.details',$post->slug) }}">{{  $post->title  }}</a>

                                <p class="ps-post__meta">
                                    <span>By:<a class="mr-5" href="#">Avijatry</a></span>
                                    -<span class="ml-5">{{ $post->created_at->format('M d, Y') }}</span>
                                </p>

                                <p>
                                  
                                    {{  Illuminate\Support\Str::words($post->details, 20, '...')  }}
                                </p>
                                <a class="ps-morelink" href="{{ route('front.blog.details',$post->slug) }}">Read more</a>
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
                <h2 class="ps-section__title">Avijatri On Instagram</h2>
            </div>
            <div class="owl-slider" data-owl-auto="true" data-owl-dots="false" data-owl-duration="1000"
                data-owl-gap="40" data-owl-item="6" data-owl-item-lg="6" data-owl-item-md="5" data-owl-item-sm="4"
                data-owl-item-xs="2" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="false"
                data-owl-speed="5000">
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image1.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image2.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image3.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image4.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image5.png') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image6.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image7.jpg') }}" /></a>
                <a href="#"><img alt=""
                        src="{{ asset('assets/frontend/images/partner/image8.jpg') }}" /></a>

            </div>
        </div>
    </div>

    <div class="ps-home-contact">
        <div id="contact-map" style="display:none;"></div>
    </div>
@endsection
