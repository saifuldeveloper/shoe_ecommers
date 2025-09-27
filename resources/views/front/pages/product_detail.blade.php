@extends('master.front')
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
                <div class="col-lg-10 col-md-12">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/items/' . $item_details->photo??"") }}"
                            class="img-fluid border mb-3 image-detail-main-image popup-image" alt="Product" />

                        <div class="d-flex">
                            <div class="owl-slider zoom-gallery product-slider" data-owl-auto="true" data-owl-dots="false"
                                data-owl-duration="1000" data-owl-gap="10" data-owl-item="4" data-owl-item-lg="6"
                                data-owl-item-md="5" data-owl-item-sm="4" data-owl-item-xs="2" data-owl-loop="true"
                                data-owl-mousedrag="on" data-owl-nav="true" data-owl-speed="5000">

                                <a href="{{ asset('assets/frontend/images/shoe/a1.avif')}}" data-source="http://500px.com/photo/32736307" title="Into The Blue" style="width:193px;height:125px;">
                            <img src="{{ asset('assets/frontend/images/shoe/a1.avif')}}" width="193" height="125">
                        </a>

                                <a href="{{ asset('assets/frontend/images/shoe/a1.avif')}}" data-source="http://500px.com/photo/32736307" title="Into The Blue" style="width:193px;height:125px;">
                            <img src="{{ asset('assets/frontend/images/shoe/a1.avif')}}" width="193" height="125">
                        </a>
                                    <a href="{{ asset('assets/frontend/images/shoe/a1.avif')}}" data-source="http://500px.com/photo/32736307" title="Into The Blue" style="width:193px;height:125px;">
                            <img src="{{ asset('assets/frontend/images/shoe/a1.avif')}}" width="193" height="125">
                        </a>
                                <a href="{{ asset('assets/frontend/images/shoe/a1.avif')}}" data-source="http://500px.com/photo/32736307" title="Into The Blue" style="width:193px;height:125px;">
                            <img src="{{ asset('assets/frontend/images/shoe/a1.avif')}}" width="193" height="125">
                        </a>
                            </div>
                        </div> 
                    </div>
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <h4 class="item-name"><strong>{{ $item_details->name??"" }}</strong></h4>
                        <p><strong>Brand:</strong> {{ $item_details->brand->name??"" }}</p>
                        @if ($item_details->code)
                        <p><strong>Product Code:</strong> {{ $item_details->code??"" }}</p>
                        @endif
                        <p><strong>Availability:</strong>  
                            @if ($item_details->is_stock())
                                <span class="text-success  d-inline-block">{{ __('In Stock') }}</span>
                            @else
                                <span class="text-danger  d-inline-block">{{ __('Out of stock') }}</span>
                            @endif
                        </p>
                        <h3 ><span class="previous-price">Tk {{ $item_details->previous_price??"" }}</span><span class="text-danger">Tk {{ $item_details->discount_price??"" }}</span></h3>
                        <p class="text-danger fw-bold">
                            @foreach ( json_decode($item_details->specification_description)??[] as $spe)
                                * {{ $spe }} <br />
                            @endforeach
                        </p>
                        <p>{{ $item_details->sort_details??"" }}</p>
                        <!-- Size -->
                        <div class="mb-3">
                            <div class="d-flex size_flex_data">
                                <p><strong>Size</strong></p>
                                <a data-toggle="modal" data-target="#size_chart"  class="size-chart-open-popup"> <img src="{{ asset('assets/frontend/images/icon_sizechar.png') }}"/> Size Chart</a>
                            </div>
                            <div class="size-option d-flex">
                                @php
                                    $variantsIds = $item_details->iteamVariant->pluck('variant_id')->values()->all();
                                    $variants = App\Models\Variant::whereIn('id', $variantsIds)->pluck('size_id')->unique()->values()->all();
                                    $sizes = App\Models\Size::whereIn('id', $variants)->get();
                                @endphp
                                @foreach ($sizes as $size)
                                    <input type="radio" id="size{{ $size->id }}" name="size" value="{{ $size->id }}" checked>
                                    <label for="size{{ $size->id }}">{{ $size->name }}</label>
                                @endforeach
                            </div>
                        </div>
                        <!-- Color -->
                        <div class="mb-3">
                            <p><strong>Color</strong></p>
                            <div class="size-option d-flex">
                                @php
                                    $variantsIds = $item_details->iteamVariant->pluck('variant_id')->values()->all();
                                    $variants = App\Models\Variant::whereIn('id', $variantsIds)->pluck('color_id')->unique()->values()->all();
                                    $colors = App\Models\Color::whereIn('id', $variants)->get();
                                @endphp
                                @foreach ($colors as $color)
                                        <input type="radio" id="color{{ $color->id }}" name="color" value="{{ $color->id }}" checked>
                                        <label for="color{{ $color->id }}">
                                            <span class="color-circle" style="background: {{ $color->code ?? '#000' }}; display:inline-block; width:20px; height:20px; border-radius:50%; border:1px solid #ccc; margin-right:5px;"></span>
                                            
                                        </label>
                                @endforeach
                            </div>
                        </div>
                        <!-- Promocode -->
                        <div class="mb-3">
                            <label class="form-label"><strong>Promocode</strong></label>
                            <input type="text" class="form-control" value="#MPC#525" />
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="me-3"><strong>Quantity</strong></label>
                            <input type="number" class="form-control w-25 qtyValue" value="1" min="1" />
                        </div>
                        <p><strong>Subtotal:</strong> Tk 2,499.00</p>
                        {{-- hidden inputs  --}}
                        <input type="hidden" value="{{ $item_details->id??"" }}" id="item_id">
                        <input type="hidden" id="demo_price"
                            value="200">

                        <div class="d-flex" style="display: inline-flex">
                            <button class="btn btn-dark me-2  add_to_cartbtn" id="add_to_cart">ADD TO CART</button>
                            <a><i class="ps-icon-heart love_icon"></i></a>
                        </div>
                        <div>
                             <button class="btn btn-outline-dark buy_now_btn" id="buy_to_cart">BUY IT NOW</button>
                        </div>
                        
                    </div>

                    <div class="clearfix"></div>
                    <div class="ps-product__content mt-100">
                        <ul class="tab-list" role="tablist">
                            <li class="active">
                                <a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a>
                            </li>
                            <li>
                                <a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a>
                            </li>
                            <li>
                                <a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a>
                            </li>
                            <li>
                                <a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-60">
                        <div class="tab-pane active" role="tabpanel" id="tab_01">
                            <p>
                                Caramels tootsie roll carrot cake sugar
                                plum. Sweet roll jelly bear claw
                                liquorice. Gingerbread lollipop dragée
                                cake. Pie topping jelly-o. Fruitcake
                                dragée candy canes tootsie roll. Pastry
                                jelly-o cupcake. Bonbon brownie soufflé
                                muffin.
                            </p>
                            <p>
                                Sweet roll soufflé oat cake apple pie
                                croissant. Pie gummi bears jujubes cake
                                lemon drops gummi bears croissant
                                macaroon pie. Fruitcake tootsie roll
                                chocolate cake Carrot cake cake bear
                                claw jujubes topping cake apple pie.
                                Jujubes gummi bears soufflé candy canes
                                topping gummi bears cake soufflé cake.
                                Cotton candy soufflé sugar plum pastry
                                sweet roll..
                            </p>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_02">
                            <p class="mb-20">
                                1 review for
                                <strong>Shoes Air Jordan</strong>
                            </p>
                            <div class="ps-review">
                                <div class="ps-review__thumbnail">
                                    <img src="images/user/1.jpg" alt="" />
                                </div>
                                <div class="ps-review__content">
                                    <header>
                                        <select class="ps-rating">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p>
                                            By<a href="">
                                                Alena Studio</a>
                                            - November 25, 2017
                                        </p>
                                    </header>
                                    <p>
                                        Soufflé danish gummi bears tart.
                                        Pie wafer icing. Gummies jelly
                                        beans powder. Chocolate bar
                                        pudding macaroon candy canes
                                        chocolate apple pie chocolate
                                        cake. Sweet caramels sesame
                                        snaps halvah bear claw wafer.
                                        Sweet roll soufflé muffin
                                        topping muffin brownie. Tart
                                        bear claw cake tiramisu
                                        chocolate bar gummies dragée
                                        lemon drops brownie.
                                    </p>
                                </div>
                            </div>
                            <form class="ps-product__review" action="_action" method="post">
                                <h4>ADD YOUR REVIEW</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Name:<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email:<span>*</span></label>
                                            <input class="form-control" type="email" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Your rating<span></span></label>
                                            <select class="ps-rating">
                                                <option value="1">
                                                    1
                                                </option>
                                                <option value="1">
                                                    2
                                                </option>
                                                <option value="1">
                                                    3
                                                </option>
                                                <option value="1">
                                                    4
                                                </option>
                                                <option value="5">
                                                    5
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Your Review:</label>
                                            <textarea class="form-control" rows="6"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="ps-btn ps-btn--sm">
                                                Submit<i class="ps-icon-next"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_03">
                            <p>Add your tag <span> *</span></p>
                            <form class="ps-product__tags" action="_action" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="" />
                                    <button class="ps-btn ps-btn--sm">
                                        Add Tags
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_04">
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                            </div>
                            <div class="form-group">
                                <button class="ps-btn" type="button">
                                    Submit
                                </button>
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
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
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
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge">
                                    <span>New</span>
                                </div>
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/frontend/images/shoe/a1.avif') }}" alt="" /><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <img src="{{ asset('assets/frontend/images/shoe/2.jpg') }}" alt="" /><img
                                            src="images/shoe/3.jpg" alt="" /><img src=""
                                            alt="" /><img src="{{ asset('assets/frontend/images/shoe/4.jpg') }}"
                                            alt="" />
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories">
                                        <a href="#">Men shoes</a>,<a href="#">
                                            Nike</a>,<a href="#"> Jordan</a>
                                    </p>
                                    <span class="ps-shoe__price">
                                        £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
 
   
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
        <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"/>
        </svg>
        </a>
        </div>

        <div class="modal-body">
        <div class="size-chart-img">
            
        <img src="//www.batabd.com/cdn/shop/files/size-chart-new_ca42ba2e-41a3-4df9-9c1a-ddfa2e4114e6_1024x1024.jpg?v=1745834022" alt="Size Chart"/>
                        
        </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',

		// If you enable allowHTMLInTemplate - 
		// make sure your HTML attributes are sanitized if they can be created by a non-admin user
		allowHTMLInTemplate: true,
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" >image source</a>';
			}
		},

		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
});

</script>
@endpush