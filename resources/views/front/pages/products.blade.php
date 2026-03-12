@extends('master.front')

@section('content')
    <link href="{{ asset('assets/frontend/css/product_page.css') }}" rel="stylesheet" />
    <div class="ps-products-wrap pt-80 pb-80">
        <div class="filter-section">
            <div class="row">
                <div class="col-6 filter-left-sidebar">
                    <div class="mobile-filter-trigger d-md-none mb-4">
                        <button type="button" class="btn btn-primary btn-block" id="openFilterBtn"
                            style="background-color: #f59b34; border: none; padding: 12px;font-size:17px">
                            <i class="fa fa-filter"></i> Filter
                        </button>
                    </div>
                    <div id="mobileFilterDrawer" class="filter-drawer">
                        <div class="drawer-header">
                            <h4>Filters</h4>
                            <button type="button" class="close-drawer">&times;</button>
                        </div>
                        <div class="drawer-body" id="mobile-filter-container">
                        </div>
                    </div>
                    <div class="drawer-overlay"></div>

                </div>
                <div class="col-6">
                    <div class="ps-product-action">
                        <div class="ps-product__filter">
                            <select class="ps-select selectpicker sort-select" name="sort_price">
                                <option value="1">Price(Low to High)</option>
                                <option value="2">Price(High to Low)</option>
                            </select>
                        </div>
                        <div class="ps-pagination">
                            <div id="pagination-container_top">
                                @include('front.pages.partials.pagination', ['products' => $products])
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class="ps-products" data-mh="product-listing">
            <div class="row ps-product__columns" id="product-list">
                @include('front.pages.partials.product_list', ['products' => $products])
            </div>
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker sort-select" name="sort_price">
                        <option value="1">Price (Low to High)</option>
                        <option value="2">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                    <div id="pagination-container">
                        @include('front.pages.partials.pagination', ['products' => $products])
                    </div>
                </div>
            </div>
        </div>
        @php
            $selected = strtolower(request()->get('constraint'));
        @endphp

        <!-- Sidebar -->
        <div class="ps-sidebar" data-mh="product-listing">
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Sub Category</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        @foreach ($subCategories as $subCategory)
                            @php
                                $subCatName = $subCategory->name;
                                $isSelected = $selected === $subCatName;
                            @endphp
                            <li class="sub-category-item {{ $isSelected ? 'selected' : '' }}"
                                data-id="{{ $subCategory->id }}">
                                <a href="javascript:void(0)">{{ $subCategory->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Shoe Brand</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        @foreach ($brands as $brand)
                            <li class="brand-item" data-id="{{ $brand->id }}">
                                <a href="javascript:void(0)">{{ $brand->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <aside class="ps-widget--sidebar">
                <div class="ps-widget__header">
                    <h3>Size</h3>
                </div>
                <div class="ps-widget__content">
                    <table class="table ps-table--size">
                        <tbody>

                            @foreach ($allSize->chunk(4) as $chunk)
                                <tr>
                                    @foreach ($chunk as $size)
                                        @php
                                            $sizeName = strtolower($size->name);
                                            $isSelected = $selected === $sizeName;
                                        @endphp
                                        <td class="size-item {{ $isSelected ? 'selected' : '' }}"
                                            data-value="{{ $size->id }}">{{ $size->name }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </aside>

            <aside class="ps-widget--sidebar">
                <div class="ps-widget__header">
                    <h3>Color</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--color">
                        @foreach ($allColor as $color)
                            @php
                                $colorName = strtolower($color->name);
                                $isSelected = $selected === $colorName;
                            @endphp
                            <li class="color-item {{ $isSelected ? 'selected' : '' }}" data-value="{{ $color->id }}">
                                <a href="#" style="background-color: {{ $color->code ?? $color->name }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>

    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            /* ===============================
               1️⃣ Mobile Sidebar Move
            =============================== */
            function moveSidebarForMobile() {
                if ($(window).width() < 768) {
                    if ($(".ps-sidebar").length) {
                        let sidebarHtml = $(".ps-sidebar").html();
                        $("#mobile-filter-container").html(sidebarHtml);
                        $(".ps-sidebar").empty();
                    }
                }
            }

            moveSidebarForMobile();


            /* ===============================
               2️⃣ Drawer Open / Close
            =============================== */
            $("#openFilterBtn").on("click", function() {
                $("#mobileFilterDrawer, .drawer-overlay").addClass("active");
                $("body").css("overflow", "hidden");
            });

            $(".close-drawer, .drawer-overlay").on("click", function() {
                $("#mobileFilterDrawer, .drawer-overlay").removeClass("active");
                $("body").css("overflow", "auto");
            });


            /* ===============================
               3️⃣ Filter Click Handler
            =============================== */
            $(document).on("click",
                ".sub-category-item, .brand-item, .size-item, .color-item",
                function() {

                    if ($(this).hasClass("size-item") || $(this).hasClass("color-item")) {
                        $(this).toggleClass("current").siblings().removeClass("current");
                    } else {
                        $(this).addClass("current").siblings().removeClass("current");
                    }

                    filterProducts();
                }
            );


            /* ===============================
               4️⃣ Sort Change
            =============================== */
            $(document).on('change', '.ps-product__filter .sort-select', function() {
                let selected_value = $(this).val();
                $('.ps-product__filter .sort-select').val(selected_value);
                filterProducts();
            });


            /* ===============================
               5️⃣ Pagination Click
            =============================== */
            $(document).on('click', '#pagination-links a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                filterProducts(page);
            });

        });


        /* ===============================
           6️⃣ Main Filter Function (Single)
        ================================= */
        function filterProducts(page = 1) {

            let scope = ($(window).width() < 768) ?
                "#mobile-filter-container" :
                ".ps-sidebar";

            let subcategory_id = $(scope + " .sub-category-item.current").data("id");
            let brand_id = $(scope + " .brand-item.current").data("id");
            let color = $(scope + " .color-item.current").data("value");
            let size = $(scope + " .size-item.current").data("value");
            let sort_by = $('.ps-product__filter .sort-select').val();

            $.ajax({
                url: "{{ route('products.filter') }}",
                type: "GET",
                data: {
                    page: page,
                    subcategory_id: subcategory_id,
                    brand_id: brand_id,
                    color: color,
                    size: size,
                    sort_by: sort_by
                },
                beforeSend: function() {
                    $("#product-list").html('<div class="text-center p-5">Loading...</div>');
                },
                success: function(response) {
                    $("#product-list").html(response.products);
                    $("#pagination-container_top, #pagination-container")
                        .html(response.pagination);
                }
            });
        }
    </script>
@endpush
