<header class="header">
    <div class="header__top mobile-hide">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 text-center">
                    
                    <p>
                        <img src="{{ asset('assets/frontend/images/icon/free-location-icon-2952-thumb.png') }}"
                            height="30" alt="">
                        <a href="{{ route('front.findStore') }}" class="storLocator"> Find A Store</a> | Customer care: 09666200300
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__logo text-center">
                        <a class="ps-logo" href="{{ route('front.index') }}"><img
                                src="{{ asset('assets/frontend/images/logo/logo.png') }}" alt=""
                                style="height: 90px;" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row d-flex p-4 align-items-center">
                        <div class="header__actions">
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="{{ route('user.login') }}" style="border-right: 1px solid #ddd">
                                    <img src="{{ asset('assets/frontend/images/icon/user-icon.png') }}" height="30"
                                        alt=""></a>
                            </div>
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="{{ route('front.wishlist') }}"><span><i>20</i></span>
                                    <i class="ps-icon-heart"></i> </a>
                            </div>
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="#">
                                    <img src="{{ asset('assets/frontend/images/whatsapp-icon.avif') }}"
                                        style="height: 32px;padding-top: 7px;" alt="">
                                </a>
                            </div>
                            <div class="ps-cart">
                                <a class="ps-cart__toggle" href="{{ route('front.wishlist') }}"><span><i>20</i></span><i
                                        class="ps-icon-shopping-cart"></i></a>
                                <div class="ps-cart__listing">
                                    <div class="ps-cart__content">
                                        <div class="ps-cart-item">
                                            <a class="ps-cart-item__close" href="#"></a>
                                            <div class="ps-cart-item__thumbnail">
                                                <a href="product-detail.html"></a><img
                                                    src="{{ asset('assets/frontend/images/cart-preview/1.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="ps-cart-item__content">
                                                <a class="ps-cart-item__title" href="product-detail.html">Amazin’
                                                    Glazin’</a>
                                                <p>
                                                    <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ps-cart-item">
                                            <a class="ps-cart-item__close" href="#"></a>
                                            <div class="ps-cart-item__thumbnail">
                                                <a href="product-detail.html"></a><img
                                                    src="{{ asset('assets/frontend/images/cart-preview/2.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="ps-cart-item__content">
                                                <a class="ps-cart-item__title" href="product-detail.html">The
                                                    Crusty Croissant</a>
                                                <p>
                                                    <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ps-cart-item">
                                            <a class="ps-cart-item__close" href="#"></a>
                                            <div class="ps-cart-item__thumbnail">
                                                <a href="product-detail.html"></a><img
                                                    src="{{ asset('assets/frontend/images/cart-preview/3.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="ps-cart-item__content">
                                                <a class="ps-cart-item__title" href="product-detail.html">The
                                                    Rolling Pin</a>
                                                <p>
                                                    <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-cart__total">
                                        <p>Number of items:<span>36</span></p>
                                        <p>Item Total:<span>£528.00</span></p>
                                    </div>
                                    <div class="ps-cart__footer">
                                        <a class="ps-btn" href="cart.html">Check out<i
                                                class="ps-icon-arrow-left"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="ps-search d-flex align-items-center border rounded"
                                style="max-width: 300px; padding: 2px 8px;">
                                <input class="form-control border-0 ps-icon-search " type="text"
                                    placeholder="Search Product…" />

                            </div>
                            <div class="menu-toggle"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left d-lg-none d-md-none">
                <div class="header__logo">
                    <a class="ps-logo" href="index.html"><img src="{{ asset('assets/frontend/images/logo/logo.png') }}"
                            alt="" style="height: 60px;" /></a>
                </div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.categories.products', 'mega-deals') }}">Mega Deals </a>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.categories.products', 'sneakers') }}">Sneakers </a>
                    </li>

                    @foreach ($categories as $category)

                    
                    <li class="menu-item menu-item-has-children has-mega-menu">
                        <a href="{{ route('front.categories.products', 'mens') }}">{{ $category->name }}</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    @if($category->subcategory->count())
                                        <ul class="mega-item mega-features">
                                             <li>
                                                <a href="{{ route('front.categories.products', $category->slug) }}">
                                                    All Shoes
                                                </a>
                                            </li>
                                            @foreach($category->subcategory as $sub)
                                                <li>
                                                    <a href="{{ route('front.categories.products', 'mens') }}">{{ $sub->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">
                                        By Color
                                    </h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Black</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Blue</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Brown</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Gray</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Green</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">
                                        By Price
                                    </h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Under Tk.1000</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Tk.1001 - Tk.1500</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Tk.1501 - Tk.2000</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Tk.2001 - Tk.3000</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">Tk.3001 - Tk.4000</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">By Size</h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">6</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">7</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">8</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">9</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products', 'mens') }}">10</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.blog') }}">News</a>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.contact') }}">Contact</a>
                    </li>
                    <li class="menu-item menu-item-has-children mobile-only ">
                        <a class="ps-user__toggle" href="{{ route('front.wishlist') }}"><span><i>20</i></span> <i
                                class="ps-icon-heart"></i> </a>
                    </li>
                </ul>


            </div>
            <div class="navigation__column right">
                <div class="ps-cart">
                    <a class="ps-cart__toggle" href="#"><span><i>20</i></span><i
                            class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing cart_slidercontent">
                        <div class="ps-cart__content">
                            <div class="ps-cart-item">
                                <a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail">
                                    <a href="product-detail.html"></a><img
                                        src="{{ asset('assets/frontend/images/cart-preview/1.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="ps-cart-item__content">
                                    <a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                                    <p>
                                        <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-cart-item">
                                <a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail">
                                    <a href="product-detail.html"></a><img
                                        src="{{ asset('assets/frontend/images/cart-preview/2.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="ps-cart-item__content">
                                    <a class="ps-cart-item__title" href="product-detail.html">The Crusty
                                        Croissant</a>
                                    <p>
                                        <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-cart-item">
                                <a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail">
                                    <a href="product-detail.html"></a><img
                                        src="{{ asset('assets/frontend/images/cart-preview/3.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="ps-cart-item__content">
                                    <a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>
                                    <p>
                                        <span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-cart__total">
                            <p>Number of items:<span>36</span></p>
                            <p>Item Total:<span>£528.00</span></p>
                        </div>
                        <div class="ps-cart__footer">
                            <a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ps-user">
                    <a class="ps-user__toggle" href="#">
                        <img src="{{ asset('assets/frontend/images/icon/user-icon.png') }}" height="30"
                            alt=""></a>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>
