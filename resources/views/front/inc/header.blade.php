<header class="header">
    <div class="header__top mobile-hide">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 text-center">

                    <p>
                        <img src="{{ asset('assets/frontend/images/icon/free-location-icon-2952-thumb.png') }}"
                            height="30" alt="">
                        <a href="{{ route('front.findStore') }}" class="storLocator"> Find A Store</a> | Customer care:
                        09666200300
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
                                <a class="ps-user__toggle" href="{{ route('user.login') }}"
                                    style="border-right: 1px solid #ddd">
                                    <img src="{{ asset('assets/frontend/images/icon/user-icon.png') }}" height="30"
                                        alt=""></a>
                            </div>
                           <div class="ps-user">
                                <a class="ps-user__toggle" href="{{ route('front.wishlist') }}">
                                    <span id="wishlist-count-header">
                                        <i class="cart_count">0</i> </span>
                                    <i class="ps-icon-heart"></i> 
                                </a>
                            </div>
                            <div class="ps-user">
                                <a class="ps-user__toggle" href="#">
                                    <img src="{{ asset('assets/frontend/images/whatsapp-icon.avif') }}"
                                        style="height: 32px;padding-top: 7px;" alt="">
                                </a>
                            </div>
                            <div>
                                <div class="cart-container">
                                    <a class="ps-cart__toggle cart-icon" href="#">
                                        <span><i class="cart_count">{{ PriceHelper::totalCartQuantity() }}</i></span>
                                        <i class="ps-icon-shopping-cart"></i>
                                    </a>
                                    <div class="cart-dropdown">
                                        <div class="dropdown-cart-items">
                                            @include('includes.cart-items-dropdown')
                                        </div>
                                        {{--  --}}
                                        <div class="cart-actions">
                                            <a href="{{ route('front.checkout.payment') }}" class="btn btn-checkout">CHECK OUT NOW</a>
                                            <a href="{{ route('front.cart') }}" class="btn btn-view">VIEW CART</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- end cart  --}}
                            </div>


                            <div class="ps-search d-flex align-items-center border rounded"
                                style="max-width: 300px; padding: 2px 8px;margin-left:10px">
                                <input id="searchInput" class="form-control border-0 ps-icon-search " type="text"
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
                                        @if ($category->subcategory->count())
                                            <ul class="mega-item mega-features">
                                                <li>
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}">
                                                        All Shoes
                                                    </a>
                                                </li>
                                                @foreach ($category->subcategory as $sub)
                                                    <li>
                                                        <a
                                                            href="{{ route('front.categories.products', 'mens') }}">{{ $sub->name }}</a>
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
                                                <a href="{{ route('front.categories.products', 'mens') }}">Under
                                                    Tk.1000</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.categories.products', 'mens') }}">Tk.1001 -
                                                    Tk.1500</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.categories.products', 'mens') }}">Tk.1501 -
                                                    Tk.2000</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.categories.products', 'mens') }}">Tk.2001 -
                                                    Tk.3000</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.categories.products', 'mens') }}">Tk.3001 -
                                                    Tk.4000</a>
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
                        <a class="ps-user__toggle" href="{{ route('front.wishlist') }}">
                            <span id="wishlist-count-mobile"><i>0</i></span> <i
                                class="ps-icon-heart"></i> </a>
                    </li>
                </ul>


            </div>
            <div class="navigation__column right">
                 <!-- USER + SEARCH ICON AREA -->
                   <div class="ps-user">
                    <button type="button" class="ps-user__toggle search-toggle-btn">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="search-box_small">
                        <div id="smallsearchModal" class="search-modal-container_small hidden">
                        <div class="trending-section">
                            <h3 class="section-title">TRENDING</h3>
                            <div class="trending-tags">
                                    @foreach ($categories as $category)
                                    <form action="{{ route('front.product.search') }}" method="GET" style="margin: 0;">
                                        <input type="hidden" name="q" value="{{ $category->name }}">
                                        <input type="hidden" name="type" value="product">
                                        <button class="trend-tag ">
                                            <i class="fas fa-search"></i> {{ $category->name }}
                                        </button>
                                    </form>
                                    @endforeach
                                </div>
                        </div>
                        
                        <div class="popular-products-section">
                            <h3 class="section-title">POPULAR PRODUCTS</h3>
                            <p>Products would be listed here...</p>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- start cart  --}}
                <div class="cart-container">
                    <a class="ps-cart__toggle cart-icon" href="{{ route('front.wishlist') }}">
                        <span><i>19</i></span><i class="ps-icon-shopping-cart"></i>
                    </a>
                    <div class="cart-dropdown">
                        <div class="cart-item">
                            <img src="https://www.batabd.com/cdn/shop/files/5208167_1_160x.jpg?v=1756790194"
                                alt="Product">
                            <div class="cart-item-details">
                                <h4>NORTH STAR STRIKER ELEV8 LADIES CANVAS</h4>
                                <p>3 / Off White / #MPC543</p>
                                <div class="cart-item-price">1 x Tk 3,749.00</div>
                            </div>
                            <div class="cart-item-remove">✖</div>
                        </div>
                        <div class="cart-item">
                            <img src="https://www.batabd.com/cdn/shop/files/5208167_1_160x.jpg?v=1756790194"
                                alt="Product">
                            <div class="cart-item-details">
                                <h4>NORTH STAR STRIKER ELEV8 LADIES CANVAS</h4>
                                <p>3 / Off White / #MPC543</p>
                                <div class="cart-item-price">1 x Tk 3,749.00</div>
                            </div>
                            <div class="cart-item-remove">✖</div>
                        </div>

                        <div class="cart-total">
                            <span>Total:</span>
                            <span>Tk 3,749.00</span>
                        </div>

                        <div class="cart-actions">
                            <a href="{{ route('front.wishlist') }}" class="btn btn-checkout">CHECK OUT NOW</a>
                            <a href="{{ route('front.wishlist') }}" class="btn btn-view">VIEW CART</a>
                        </div>
                    </div>
                </div>
                {{-- end cart  --}}

                <div class="ps-user">
                    <a class="ps-user__toggle" href="#">
                        <img src="{{ asset('assets/frontend/images/icon/user-icon.png') }}" height="30"
                            alt=""></a>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>

    {{-- ==search modal --}}
    <div id="searchModal" class="search-modal-container hidden">
        <div class="trending-section">
            <h3 class="section-title">TRENDING</h3>
             <div class="trending-tags">
                    @foreach ($categories as $category)
                    <form action="{{ route('front.product.search') }}" method="GET" style="margin: 0;">
                        <input type="hidden" name="q" value="{{ $category->name }}">
                        <input type="hidden" name="type" value="product">
                        <button class="trend-tag ">
                            <i class="fas fa-search"></i> {{ $category->name }}
                        </button>
                    </form>
                    @endforeach
                </div>
        </div>
        
        <div class="popular-products-section">
            <h3 class="section-title">POPULAR PRODUCTS</h3>
            <p>Products would be listed here...</p>
        </div>
    </div>
</header>

@push('js')
    <script>
        document.querySelectorAll('.cart-container').forEach(container => {
            const cartDropdown = container.querySelector('.cart-dropdown');
            let hideTimeout;

            container.addEventListener('mouseenter', () => {
                clearTimeout(hideTimeout);
                cartDropdown.classList.add('active');
            });

            container.addEventListener('mouseleave', () => {
                hideTimeout = setTimeout(() => {
                    cartDropdown.classList.remove('active');
                }, 200); 
            });
        });

        // Remove cart item
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('cart-item-remove')) {
                const item = e.target.closest('.cart-item');
                item.remove();
                updateCartTotal();
            }
        });

        function updateCartTotal() {
            document.querySelectorAll('.cart-container').forEach(container => {
                const prices = container.querySelectorAll('.cart-item-price');
                let total = 0;
                prices.forEach(priceEl => {
                    const text = priceEl.textContent.replace(/[^\d.]/g, '');
                    total += parseFloat(text) || 0;
                });
                const totalEl = container.querySelector('.cart-total span:last-child');
                if (totalEl) {
                    totalEl.textContent = "Tk " + total.toFixed(2);
                }
            });
        }

        // Get the elements
        const menuToggle = document.querySelector('.menu-toggle');
        const body = document.body; // Target the <body> element

        // Add the click listener
        menuToggle.addEventListener('click', function() {
        body.classList.toggle('sidebar-open');
        });
        
        //click to search icon show the modal 
        document.addEventListener("DOMContentLoaded", () => {
            const searchToggleBtn = document.querySelector(".search-toggle-btn");
            const searchBox = document.querySelector(".search-box_small");
            const searchModal = document.getElementById("smallsearchModal"); 

            if (searchToggleBtn && searchBox && searchModal) {
                searchToggleBtn.addEventListener("click", (e) => {
                    e.stopPropagation(); 
                    searchBox.classList.toggle("active");
                    if (searchBox.classList.contains("active")) {
                        searchModal.classList.remove("hidden");
                        const searchInput = searchBox.querySelector("input[type='text'], input[type='search']");
                        if (searchInput) {
                            searchInput.focus();
                        }
                    } else {
                        searchModal.classList.add("hidden");
                    }
                });

                // click outside to close
                document.addEventListener("click", (e) => {
                    if (searchBox.classList.contains("active") && !searchBox.contains(e.target) && !searchToggleBtn.contains(e.target)) {
                        searchBox.classList.remove("active");
                        searchModal.classList.add("hidden"); 
                    }
                });
            }
        });

        // ==click to search bar show the modal 
        document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchModal = document.getElementById('searchModal');
        const searchWrapper = document.querySelector('.search-dropdown-wrapper');

        // Function to open the modal
        function openModal() {
            searchModal.classList.remove('hidden');
        }
        // Function to close the modal
        function closeModal() {
            searchModal.classList.add('hidden');
        }
        // 1. Open modal when the input is clicked/focused
        searchInput.addEventListener('focus', openModal);

        // 2. Hide modal when clicking anywhere OUTSIDE the search wrapper
        document.addEventListener('click', function(event) {
            if (!searchWrapper.contains(event.target)) {
                closeModal();
            }
        });

      document.addEventListener('click', function(event) {
        const isClickOnInput = searchInput && searchInput.contains(event.target);
        const isClickInsideModal = searchModal.contains(event.target);
        if (!searchModal.classList.contains('hidden') && !isClickOnInput && !isClickInsideModal) {
            closeModal();
        }
    });
    });


    //wishlist count shows 
   // wishlist count shows
    function updateWishlistCount() {
        try {
            let url = '{{ route('user.wishlist.count') }}';

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
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
        } catch(e) {
            console.warn("Wishlist count route not found or error in script:", e);
        }
    }
    $(document).ready(function() {
        updateWishlistCount(); 
    });
    </script>
@endpush
