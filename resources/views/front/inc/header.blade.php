<header class="header">
    <div class="header__top mobile-hide">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-4 col-md-4 text-center">
                    <p style="padding-top: 40px;">
                        <img src="{{ asset('assets/frontend/images/icon/free-location-icon-2952-thumb.png') }}"
                            height="30" alt="">
                        <a href="{{ route('front.contact') }}" class="storLocator"> Find A Store</a> | Customer care:
                        {{ $setting->customer_care_number }}
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
                                <a class="ps-user__toggle" href="https://wa.me/88{{ $setting->whatsapp_number }}"
                                    target="_blank">
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
                            src="{{ url('/storage/generalSettings/' . $setting->logo) }}" alt=""
                            style="height: 60px;" /></a>
                </div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    {{-- <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.campaign') }}">Mega Deals </a>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-has-children dropdown">
                        <a href="{{ route('front.categories.products', 'sneakers') }}">Sneakers </a>
                    </li> --}}
                    @foreach ($categories as $category)
                        @php $selected = strtolower(request('constraint')); @endphp
                        <li class="menu-item menu-item-has-children has-mega-menu">
                            <a href="#">{{ $category->name }}</a>
                            <div class="mega-menu">
                                <div class="mega-wrap">
                                    {{-- Sub Category --}}
                                    @if ($category->subcategory->count())
                                        <div class="mega-column">
                                            <ul class="mega-item">
                                                <li>
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}">
                                                        All Shoes
                                                    </a>
                                                </li>
                                                @foreach ($category->subcategory as $sub)
                                                    <li>
                                                        <a href="{{ route('front.categories.products', $sub->slug) }}">
                                                            {{ $sub->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{-- Colors --}}
                                    <div class="mega-column">
                                        <h4 class="mega-heading">By Color</h4>
                                        <ul class="mega-item">
                                            @foreach ($category->colors as $color)
                                                <li class="{{ strtolower($color) === $selected ? 'selected' : '' }}">
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}?constraint={{ strtolower($color) }}">
                                                        {{ $color }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    {{-- Price --}}
                                    {{-- <div class="mega-column">
                                        <h4 class="mega-heading">By Price</h4>
                                        <ul class="mega-item">
                                            @foreach ($category->prices as $price)
                                                <li class="{{ $price == $selected ? 'selected' : '' }}">
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}?constraint={{ $price }}">
                                                        Tk {{ $price }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div> --}}
                                    <div class="mega-column">
                                        <h4 class="mega-heading">By Price</h4>
                                        <ul class="mega-item">
                                            @php
                                                $itemsQuery = $category->items()->where('status', 1);
                                                $minPrice = floor($itemsQuery->min('discount_price') / 500) * 500;
                                                $maxPrice = ceil($itemsQuery->max('discount_price') / 500) * 500;
                                                $step = 500;
                                            @endphp
                                            @for ($start = $minPrice; $start < $maxPrice; $start += $step)
                                                @php
                                                    $end = $start + $step;
                                                    // Checking if there are any items in this range
                                                    $hasItems = $category
                                                        ->items()
                                                        ->where('status', 1)
                                                        ->whereBetween('discount_price', [$start, $end])
                                                        ->exists();

                                                    $rangeValue = $start . '-' . $end;
                                                @endphp
                                                @if ($hasItems)
                                                    <!--- Only show if item exists. -->
                                                    <li
                                                        class="{{ request('constraint') == $rangeValue ? 'selected' : '' }}">
                                                        <a
                                                            href="{{ route('front.categories.products', $category->slug) }}?constraint={{ $rangeValue }}">
                                                            @if ($start == $minPrice)
                                                                Under Tk {{ $end }}
                                                            @else
                                                                Tk {{ $start + 1 }} - {{ $end }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endif
                                            @endfor
                                            <!--- Above Max Range (If there is) -->
                                            @php
                                                $hasAboveItems = $category
                                                    ->items()
                                                    ->where('status', 1)
                                                    ->where('discount_price', '>', $maxPrice)
                                                    ->exists();
                                            @endphp
                                            @if ($hasAboveItems)
                                                <li
                                                    class="{{ request('constraint') == $maxPrice . '-1000000' ? 'selected' : '' }}">
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}?constraint={{ $maxPrice }}-1000000">
                                                        Above Tk {{ $maxPrice }}
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    {{-- Size --}}
                                    <div class="mega-column">
                                        <h4 class="mega-heading">By Size</h4>
                                        <ul class="mega-item">
                                            @foreach ($category->sizes as $size)
                                                <li class="{{ strtolower($size) === $selected ? 'selected' : '' }}">
                                                    <a
                                                        href="{{ route('front.categories.products', $category->slug) }}?constraint={{ strtolower($size) }}">
                                                        👞 {{ $size }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                    @endforeach

                    <li class="menu-item  ">
                        <a href="{{ route('front.blog') }}">News</a>
                    </li>
                    <li class="menu-item  dropdown">
                        <a href="{{ route('front.contact') }}">Contact</a>
                    </li>
                    <li class="menu-item R mobile-only-wa" style="vertical-align: middle;">
                        <a class="ps-user__toggle" href="https://wa.me/88{{ $setting->whatsapp_number }}"
                            target="_blank"
                            style="display: flex; align-items: center; padding: 5px;padding-left:10px;width:100%">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 448 512" fill="#25D366">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.4-11.3 2.5-2.4 5.5-6.5 8.3-9.7 2.8-3.3 3.7-5.5 5.5-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.3 5.7 23.6 9.2 31.7 11.7 13.3 4.2 25.4 3.6 35 2.2 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>
                    </li>
                    <li class="menu-item  mobile-only ">
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
                <div class="ps-user">
                    <button type="button" class="ps-user__toggle search-toggle-btn">
                        <img src="{{ asset('assets/frontend/images/icon/icons8-search-50.png') }}" height="30"
                            alt="">
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
                    <a class="ps-cart__toggle cart-icon" href="{{ route('front.cart') }}">
                        <span><i class="cart_count">{{ PriceHelper::totalCartQuantity() }}</i></span><i
                            class="ps-icon-shopping-cart"></i>

                    </a>
                    <div class="cart-dropdown">

                        <div class="cart-item">
                            @include('includes.cart-items-dropdown')
                        </div>

                        <div class="cart-actions">
                            <a href="{{ route('front.checkout.payment') }}" class="btn btn-checkout">CHECK OUT
                                NOW</a>
                            <a href="{{ route('front.cart') }}" class="btn btn-view">VIEW CART</a>

                        </div>
                    </div>
                </div>
                <div class="ps-user">
                    <a class="ps-user__toggle" href="{{ route('user.login') }}">
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
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.querySelector('.main-menu');
            const toggle = document.querySelector('.menu-toggle');

            if (!menu || !toggle) return;

            toggle.addEventListener('click', () => {
                menu.classList.toggle('active');
            });
        });
    </script>
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
    <script>
        // window.addEventListener("load", function() {
        //     document.body.classList.add("nav-loaded");
        // });

        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("nav-loaded");
        });
    </script>
@endpush
