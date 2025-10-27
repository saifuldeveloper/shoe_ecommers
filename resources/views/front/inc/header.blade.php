<header class="header">
    <div class="header__top mobile-hide">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 text-center">

                    <p style="padding-top: 40px;">
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
                                        <i class="">0</i> </span>
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
                                            <a href="{{ route('front.checkout.payment') }}"
                                                class="btn btn-checkout">CHECK OUT NOW</a>
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
                            <div id="productResultsModal" class="product-results-modal" style="display: none">
                                <div class="modal-content_product">
                                    <h5 class="modal-heading_result">PRODUCT RESULTS</h5>
                                    <div id="productResultsContainer" class="results-grid">
                                    </div>
                                    <div class="see-all-container">
                                        <a href="#" class="see-all-link">SEE ALL RESULTS (<span
                                                id="totalResults">0</span>)</a>
                                    </div>
                                </div>
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
                    <a class="ps-logo" href="{{ route('front.index') }}"><img
                            src="{{ asset('assets/frontend/images/logo/logo.png') }}" alt=""
                            style="height: 60px;" /></a>
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
                            <a href="#">{{ $category->name }}</a>
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
                                    @php
                                        $products = App\Models\Item::with( 'itemVariants.variant.color', 'itemVariants.variant.size')
                                            ->where('category_id', $category->id)
                                            ->where('status', 1)
                                            ->orderBy('id', 'DESC')
                                            ->get();

                                        $colors = $products->flatMap(function ($product) {
                                                return $product->itemVariants->pluck('variant.color.name')->filter();
                                            })->unique()->values();

                                        $sizes = $products->flatMap(function ($product) {
                                                return $product->itemVariants->pluck('variant.size.name')->filter();
                                            })->unique()->values();

                                        $prices = $products
                                            ->flatMap(function ($product) {
                                                return $product->itemVariants->map(function ($variant) use ($product) {
                                                    return $product->discount_price + ($variant->additional_price ?? 0);
                                                });
                                            })->filter()->unique()->values();

                                    @endphp
                                    <div class="mega-column">
                                        <h4 class="mega-heading">
                                            By Color
                                        </h4>
                                        <ul class="mega-item">
                                            @foreach ($colors as $color)
                                                <li>
                                                    <a href="">
                                                         {{ $color }} 
                                                        </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">
                                            By Price
                                        </h4>
                                        <ul class="mega-item">

                                            @foreach ($prices as $price)
                                                <li>
                                                    <a href="">
                                                        Tk {{ $price }}
                                                    </a>
                                                </li>
                                            @endforeach>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">By Size</h4>
                                        <ul class="mega-item">
                                            @foreach ($sizes as $size)
                                                <li>
                                                    <a href="">{{ $size }}</a>
                                                </li>
                                            @endforeach
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
                            <span id="wishlist-count-mobile"><i>0</i></span> <i class="ps-icon-heart"></i> </a>
                    </li>
                </ul>
            </div>
            <div class="search-fixed" id="show_hide_cart">

                <button type="button" id="openSearchBtn" class="ps-user__toggle sticky_search-toggle-btn">
                    <i class="fa fa-search"></i>
                </button>
                <div>
                    <div class="cart-container">
                        <a class="ps-cart__toggle cart-icon" href="#">
                            <span><i class="cart_count">{{ PriceHelper::totalCartQuantity() }}</i></span>
                            <i class="ps-icon-shopping-cart"></i>
                        </a>
                        <div class="cart-dropdown" id="sticky_cart_bar">
                            <div class="dropdown-cart-items">
                                @include('includes.cart-items-dropdown')
                            </div>
                            {{--  --}}
                            <div class="cart-actions">
                                <a href="{{ route('front.checkout.payment') }}" class="btn btn-checkout">CHECK OUT
                                    NOW</a>
                                <a href="{{ route('front.cart') }}" class="btn btn-view">VIEW CART</a>
                            </div>
                        </div>
                    </div>
                    {{-- end cart  --}}
                </div>
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
                                        <form action="{{ route('front.product.search') }}" method="GET"
                                            style="margin: 0;">
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
{{-- //small device search bar products  --}}
<div class="small_ps-search d-flex align-items-center border rounded">
    <input id="searchInput_small_device" class="form-control" type="text" placeholder="Search Product…" />
</div>
<div class="small_device_container">
    <div id="productResultsModal_small" class="small_device_product-results-modal" style="display: none">
        <div class="modal-content_product">
            <h5 class="modal-heading_result">PRODUCT RESULTS</h5>
            <div id="productResultsContainer_small" class="results-grid">
            </div>
            <div class="see-all-container">
                <a href="#" class="see-all-link">SEE ALL RESULTS (<span id="totalProducts">0</span>)</a>
            </div>
        </div>
    </div>
</div>

{{-- sticky search icon click to modal and keyword base products modal  --}}
{{-- sticky search icon click to modal and keyword base products modal  --}}
<div id="searchModal_sticky_navbar" class="search-modal-overlay">
    <span class="close-btn-top" id="closeSearchBtn_top">&times;</span>
    <div class="search-modal-content">
        <div class="search-modal-header">
            <form class="search-form">
                <input type="text" id="searchInput_sticky" class="search-input" placeholder="SEARCH" autofocus>
                <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<div id="category_show_sticky_navbar" class="search-modal-container_sticky">
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

<div class="sticky_small_device_container">
    <div id="sticky_productResultsModal_small" class="sticky_small_device_product-results-modal"
        style="display: none">
        <div class="modal-content_product">
            <h5 class="modal-heading_result">PRODUCT RESULTS</h5>
            <div id="sticky_productResultsContainer_small" class="results-grid">
            </div>
            <div class="see-all-container">
                <a href="#" class="see-all-link">SEE ALL RESULTS (<span id="totalProducts_sticky">0</span>)</a>
            </div>
        </div>
    </div>
</div>




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


        // ==click to search input field & show the modal dektop device
        // ==click to search input field & show the modal dektop device
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

            // Check if the current value of the input has 3 or more characters
            searchInput.addEventListener('input', function() {

                if (searchInput.value.length >= 3) {
                    closeModal();
                } else {
                    if (searchModal.classList.contains('hidden')) {
                        openModal();
                    }
                }
            });

            // 2. Hide modal when clicking anywhere OUTSIDE the search wrapper
            document.addEventListener('click', function(event) {
                if (!searchWrapper.contains(event.target)) {
                    closeModal();
                }
                searchInput.addEventListener('input', closeModal);
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
            } catch (e) {
                console.warn("Wishlist count route not found or error in script:", e);
            }
        }
        $(document).ready(function() {
            updateWishlistCount();
        });
    </script>

    <script>
        //input field keyword searchwise products modal products shows shows dektop device
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const modal = document.getElementById('productResultsModal');
            const resultsContainer = document.getElementById('productResultsContainer');
            const totalResultsSpan = document.getElementById('totalResults');
            const seeAllLink = document.querySelector('.see-all-link');


            // --- Function to build the product HTML  ---
            const PRODUCT_DETAIL_URL = "{{ route('front.product', ['slug' => ':slug']) }}";

            function createProductHTML(product) {
                const imageUrl = `/storage/items/${product.thumbnail}`;
                const productLink = PRODUCT_DETAIL_URL.replace(':slug', product.slug);
                return `
            <div class="product-item">
                <a href="${productLink}">
                <img src="${imageUrl}" alt="${product.name}">
                <p class="name">${product.name}</p>
                <span class="original-price">Tk ${product.previous_price}</span>
                <span class="currency">Tk</span>
                <span class="sale-price">${product.discount_price}</span>
                </a>
            </div>
        `;
            }

            // --- Core Logic to Display Results 
            function showProductResults(products, total, query) {
                const productListViewRoute = '{{ route('front.show.search.product') }}';
                resultsContainer.innerHTML = '';

                if (products.length === 0) {
                    // Show no results message
                    resultsContainer.innerHTML =
                        '<p class="no-results-message" style="padding: 15px; text-align: center;">No products found matching your search.</p>';
                    totalResultsSpan.textContent = '0';
                } else {
                    products.forEach(product => {
                        resultsContainer.innerHTML += createProductHTML(product);
                    });

                    totalResultsSpan.textContent = total.toLocaleString();
                    seeAllLink.href = `${productListViewRoute}?q=${encodeURIComponent(query)}&type=product`;
                }
                modal.style.display = 'block';
            }

            // --- Debounce Function (from previous answer) ---
            function debounce(func, delay) {
                let timeout;
                return function(...args) {
                    const context = this;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), delay);
                };
            }

            // --- AJAX/Fetch Logic ---
            function fetchProductResults(query) {
                const SEARCH_ROUTE_URL = "{{ route('front.product.query') }}";
                const url = SEARCH_ROUTE_URL + `?q=${encodeURIComponent(query)}`;

                // Optional: Add a loading state while fetching
                resultsContainer.innerHTML =
                    '<p class="loading-message" style="padding: 15px; text-align: center;">Searching...</p>';
                modal.style.display = 'block';

                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        showProductResults(data.products, data.totalCount, query);
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                        resultsContainer.innerHTML =
                            '<p class="error-message" style="padding: 15px; text-align: center; color: red;">Failed to load results. Try again.</p>';
                        totalResultsSpan.textContent = '0';
                        modal.style.display = 'block';
                    });
            }

            // --- Event Listener: The Final Connection ---
            if (searchInput) {
                searchInput.addEventListener('input', debounce((event) => {
                    const query = event.target.value.trim();

                    if (query.length >= 3) {
                        fetchProductResults(query);
                    } else {
                        modal.style.display = 'none';
                    }
                }, 300));
            }
            document.addEventListener('click', (event) => {
                const searchContainer = searchInput.closest('.ps-search');
                if (!searchContainer.contains(event.target) && !modal.contains(event.target)) {
                    modal.style.display = 'none';
                }
            });

        });
    </script>

    <script>
        //click to search icon show input field and click to input field show the modal mobile device
        //click to search icon show input field and click to input field show the modal   mobile device
        document.addEventListener("DOMContentLoaded", () => {
            const searchToggleBtn = document.querySelector(".search-toggle-btn");
            const smallPsSearch = document.querySelector(".small_ps-search");
            const searchInput = document.getElementById("searchInput_small_device");
            const searchModal = document.getElementById("smallsearchModal");
            const searchBoxContainer = document.querySelector(".search-box_small");

            if (searchToggleBtn && smallPsSearch && searchInput && searchModal && searchBoxContainer) {
                // --- 1. Search Toggle Button Click Event: Toggles the visibility of the input box ---
                searchToggleBtn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    smallPsSearch.classList.toggle("active");

                    if (smallPsSearch.classList.contains("active")) {
                        searchInput.focus();
                        searchModal.classList.add("hidden");
                    } else {
                        searchModal.classList.add("hidden");
                    }
                });
                // --- 2. Input Field Click Event: Shows the Modal ---
                searchInput.addEventListener("click", (e) => {
                    e.stopPropagation();
                    if (smallPsSearch.classList.contains("active")) {
                        searchModal.classList.remove("hidden");
                    }
                });

                // --- 3. Click Outside to Close: Hides Input Bar and Modal ---
                document.addEventListener("click", (e) => {
                    const isClickOutside = !smallPsSearch.contains(e.target) &&
                        !searchModal.contains(e.target) &&
                        !searchToggleBtn.contains(e.target);

                    if (smallPsSearch.classList.contains("active") && isClickOutside) {
                        smallPsSearch.classList.remove("active");
                        searchModal.classList.add("hidden");
                    }
                });
                document.addEventListener("keydown", (e) => {
                    if (e.key === "Escape" && searchModal.classList.contains("hidden") === false) {
                        searchModal.classList.add("hidden");
                    }
                });
            }
        });

        //input field keyword searchwise products modal products shows shows
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput_small_device');
            const modal = document.getElementById('productResultsModal_small');
            const resultsContainer = document.getElementById('productResultsContainer_small');
            const totalResultsSpan = document.getElementById('totalProducts');
            const seeAllLink = document.querySelector('.see-all-link');


            // --- Function to build the product HTML  ---
            const PRODUCT_DETAIL_URL = "{{ route('front.product', ['slug' => ':slug']) }}";

            function createProductHTML(product) {
                const imageUrl = `/storage/items/${product.thumbnail}`;
                const productLink = PRODUCT_DETAIL_URL.replace(':slug', product.slug);
                return `
            <div class="product-item">
                <a href="${productLink}">
                <img src="${imageUrl}" alt="${product.name}">
                <p class="name">${product.name}</p>
                <span class="original-price">Tk ${product.previous_price}</span>
                <span class="currency">Tk</span>
                <span class="sale-price">${product.discount_price}</span>
                </a>
            </div>
        `;
            }

            // --- Core Logic to Display Results 
            function showProductResults(products, total, query) {
                const productListViewRoute = '{{ route('front.show.search.product') }}';
                resultsContainer.innerHTML = '';

                if (products.length === 0) {
                    // Show no results message
                    resultsContainer.innerHTML =
                        '<p class="no-results-message" style="padding: 15px; text-align: center;">No products found matching your search.</p>';
                    totalResultsSpan.textContent = '0';
                } else {
                    products.forEach(product => {
                        resultsContainer.innerHTML += createProductHTML(product);
                    });

                    totalResultsSpan.textContent = total.toLocaleString();
                    seeAllLink.href = `${productListViewRoute}?q=${encodeURIComponent(query)}&type=product`;
                }
                modal.style.display = 'block';
            }

            // --- Debounce Function (from previous answer) ---
            function debounce(func, delay) {
                let timeout;
                return function(...args) {
                    const context = this;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), delay);
                };
            }

            // --- AJAX/Fetch Logic ---
            function fetchProductResults(query) {
                const SEARCH_ROUTE_URL = "{{ route('front.product.query') }}";
                const url = SEARCH_ROUTE_URL + `?q=${encodeURIComponent(query)}`;

                // Optional: Add a loading state while fetching
                resultsContainer.innerHTML =
                    '<p class="loading-message" style="padding: 15px; text-align: center;">Searching...</p>';
                modal.style.display = 'block';

                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        showProductResults(data.products, data.totalCount, query);
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                        resultsContainer.innerHTML =
                            '<p class="error-message" style="padding: 15px; text-align: center; color: red;">Failed to load results. Try again.</p>';
                        totalResultsSpan.textContent = '0';
                        modal.style.display = 'block';
                    });
            }

            // --- Event Listener: The Final Connection ---
            if (searchInput) {
                searchInput.addEventListener('input', debounce((event) => {
                    const query = event.target.value.trim();

                    if (query.length >= 3) {
                        fetchProductResults(query);
                    } else {
                        modal.style.display = 'none';
                    }
                }, 300));
            }
            document.addEventListener('click', (event) => {
                const searchContainer = searchInput.closest('.small_ps-search');
                if (!searchContainer.contains(event.target) && !modal.contains(event.target)) {
                    modal.style.display = 'none';
                }
            });

        });
    </script>
    <script>
        const modal = document.getElementById('searchModal_sticky_navbar');
        const closeBtnTop = document.getElementById('closeSearchBtn_top');
        const btn = document.getElementById('openSearchBtn');
        const closeBtn = document.getElementById('closeSearchBtn');
        const searchInput = document.getElementById('searchInput_sticky');

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
            // Focus on the input field when the modal opens
            setTimeout(() => {
                searchInput.focus();
            }, 10);
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        document.onkeydown = function(event) {
            if (event.key === "Escape") {
                modal.style.display = "none";
            }
        };
        closeBtnTop.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        $(document).ready(function() {
            // --- Element Declarations ---
            const $searchInput = $('#searchInput_sticky');
            const $categoryDropdown = $('#category_show_sticky_navbar');
            const $productModal = $('#sticky_productResultsModal_small');

            // product result model
            const $resultsContainer = $('#sticky_productResultsContainer_small');
            const $totalResultsSpan = $('#totalProducts_sticky');
            const $seeAllLink = $('.see-all-link');

            // --- Configuration & Helpers (Blade routes) ---

            const PRODUCT_DETAIL_URL = "{{ route('front.product', ['slug' => ':slug']) }}";
            const PRODUCT_SEARCH_ROUTE = "{{ route('front.product.query') }}";
            const PRODUCT_LIST_ROUTE = '{{ route('front.show.search.product') }}';

            // --- Debounce Function ---
            function debounce(func, delay) {
                let timeout;
                return function(...args) {
                    const context = this;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), delay);
                };
            }

            // --- Product HTML & Display Functions  ---
            function createProductHTML(product) {
                const imageUrl = `/storage/items/${product.thumbnail}`;
                const productLink = PRODUCT_DETAIL_URL.replace(':slug', product.slug);
                return `
            <div class="product-item">
                <a href="${productLink}">
                <img src="${imageUrl}" alt="${product.name}">
                <p class="name">${product.name}</p>
                <span class="original-price">Tk ${product.previous_price}</span>
                <span class="currency">Tk</span>
                <span class="sale-price">${product.discount_price}</span>
                </a>
            </div>
        `;
            }

            function showProductResults(products, total, query) {
                $resultsContainer.empty();

                if (products.length === 0) {
                    $resultsContainer.html(
                        '<p class="no-results-message" style="padding: 15px; text-align: center;">No products found matching your search.</p>'
                    );
                    $totalResultsSpan.text('0');
                } else {
                    let html = '';
                    products.forEach(product => {
                        html += createProductHTML(product);
                    });
                    $resultsContainer.html(html);
                    $totalResultsSpan.text(total.toLocaleString());
                    $seeAllLink.attr('href', `${PRODUCT_LIST_ROUTE}?q=${encodeURIComponent(query)}&type=product`);
                }

                // show the product modal
                $productModal.show();
            }

            // --- AJAX Request Function ---
            function fetchProductResults(query) {
                const url = PRODUCT_SEARCH_ROUTE + `?q=${encodeURIComponent(query)}`;

                $resultsContainer.html(
                    '<p class="loading-message" style="padding: 15px; text-align: center;">Searching...</p>');
                $productModal.show();

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        showProductResults(data.products, data.totalCount, query);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching search results:', status, error);
                        $resultsContainer.html(
                            '<p class="error-message" style="padding: 15px; text-align: center; color: red;">Failed to load results. Try again.</p>'
                        );
                        $totalResultsSpan.text('0');
                        $productModal.show();
                    }
                });
            }

            // =======================================================
            // --- A. Event Listener: CLICK (Category Dropdown) ---
            // =======================================================
            $searchInput.on('click', function(event) {
                event.stopPropagation();

                const query = $(this).val().trim();
                if (query.length < 3) {
                    $productModal.hide();

                    $categoryDropdown.slideDown(200);
                }
            });

            // =======================================================
            // --- B. Event Listener: INPUT/TYPE (Product Modal) ---
            // =======================================================
            $searchInput.on('input', debounce(function() {
                const query = $(this).val().trim();

                if (query.length >= 3) {
                    $categoryDropdown.slideUp(100);
                    fetchProductResults(query);
                } else {
                    if ($(this).is(':focus')) {
                        $categoryDropdown.slideDown(200);
                    }
                    $productModal.hide();
                }
            }, 300));

            // =======================================================
            // --- C. Event Listener: Hide on Outside Click ---
            // =======================================================
            $(document).on('click', function(event) {
                const $target = $(event.target);
                if (!$target.is($searchInput) && !$target.closest($categoryDropdown).length) {
                    $categoryDropdown.slideUp(200);
                }

                if (!$target.is($searchInput) && !$target.closest($productModal).length) {
                    $productModal.hide();
                }
            });
        });
    </script>
@endpush
