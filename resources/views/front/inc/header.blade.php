<header class="header">
    <div class="header__top mobile-hide">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 text-center">
                    <p>
                        Find A Store | Customer care: 09666200300
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__logo text-center">
                        <a class="ps-logo" href="{{ route('front.index') }}"><img src="{{ asset('assets/frontend/images/logo/logo.png') }}"
                                alt="" style="height: 90px;" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row d-flex p-4 align-items-center">
                        <div class="header__actions">
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="#" style="border-right: 1px solid #ddd"> <i
                                        class="fa fa-user"></i> </a>
                            </div>
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="{{ route('front.wishlist')}}"><span><i>20</i></span> <i
                                        class="ps-icon-heart"></i> </a>
                            </div>
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="#">
                                    <img src="{{ asset('assets/frontend/images/whatsapp-icon.avif') }}"
                                        style="height: 32px;padding-top: 7px;" alt="">
                                </a>
                            </div>
                            <div class="ps-cart">
                                <a class="ps-cart__toggle" href="{{ route('front.wishlist')}}"><span><i>20</i></span><i
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
                        <a href="{{ route('front.categories.products','mega-deals') }}">Mega Deals </a>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.categories.products','sneakers') }}">Sneakers </a>
                    </li>
                    <li class="menu-item menu-item-has-children has-mega-menu">
                        <a href="{{ route('front.categories.products','mens') }}">Men</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">NEW RELEASES</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">FEATURES SHOES</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">BEST SELLERS</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">NOW TRENDING</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">SUMMER ESSENTIALS</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">MOTHER'S DAY
                                                COLLECTION</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">FAN GEAR</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Shoes</h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">All Shoes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Running</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Training & Gym</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Basketball</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Football</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Soccer</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Baseball</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">
                                        CLOTHING
                                    </h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Compression & Nike
                                                Pro</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Tops & T-Shirts</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Polos</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Hoodies &
                                                Sweatshirts</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Jackets & Vests</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Pants & Tights</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Shorts</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">
                                        Accessories
                                    </h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Compression & Nike
                                                Pro</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Tops & T-Shirts</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Polos</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Hoodies &
                                                Sweatshirts</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Jackets & Vests</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Pants & Tights</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Shorts</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">BRAND</h4>
                                    <ul class="mega-item">
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">NIKE</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Adidas</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">Dior</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.categories.products','mens') }}">B&G</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="{{ route('front.categories.products','women') }}">Women</a></li>
                    <li class="menu-item"><a href="{{ route('front.categories.products','kids') }}">Kids</a></li>
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.blog') }}">News</a>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right  shoe-mobile">
                <form class="ps-search--header shoe-mobile" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search Product…" />
                    <button><i class="ps-icon-search"></i></button>
                </form>
                <div class="ps-cart">
                    <a class="ps-cart__toggle" href="#"><span><i>20</i></span><i
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
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>
