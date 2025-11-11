@extends('master.front')

@section('content')
@push('css')
    <style> 
    .size-item {
    cursor: pointer;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-align: center;
    transition: all 0.2s;
}
.size-item:hover {
    background-color: #f0f0f0;
}
.size-item.current {
    background-color: #f59b34; 
    color: #fff;
    border-color: #f59b34;
}

/* Color selection */
.ps-list--color li {
    display: inline-block;
    width: 24px;
    height: 24px;
    margin: 3px;
    border: 2px solid transparent;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.2s;
}
.ps-list--color li a {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.color-item.current {
    border-color: #f59b34; /* Highlight border for selected color */
}
.color-item.current {
    border-color: #f59b34;
    box-shadow: 3px 2px 1px 7px #f59b34
}
    </style>
@endpush


<div class="ps-products-wrap pt-80 pb-80">
    <div class="ps-products" data-mh="product-listing">
        <div class="ps-product-action">
            <div class="ps-product__filter">
                    <select class="ps-select selectpicker sort-select" name="sort_price">
                        <option value="1">Price (Low to High)</option>
                        <option value="2">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                  <div id="pagination-container_top">
                        @include('front.pages.partials.pagination', ['products' => $products])
                    </div>
                </div>
            </div>
            {{-- //compare button  --}}
        <div class="compare-link open">
            <a href="javascript:void(0)" data-compare-selected="" id="open-compare-modal">
            <span class="compare-text">Compare</span>
            <span class="countPill countPill--positive countPill--alt" data-compare-count="">7</span>
            </a>
        </div>
        <div id="product-compare-modal" class="modal-overlay">
        <div class="modal-content">
            <div class="comparison-container">
                <div class="comparison-scroll-wrapper">
                      <div class="halo-modal-header">
                        <span class="text">Compare</span>
                        <a href="javascript:void(0)" class="remove-all" title="Remove All" data-compare-remove-all="">
                            Remove All
                        </a>
                        <a href="javascript:void(0)" class="close_close-modal" title="Close">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
                          <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"></path>
                      </svg>
                      </a>
                    </div>
                    <table class="comparison-table">
                         <tbody class="product_data_compare">
                            <tr>
                                 <tr>
                                <th class="attribute-col">Products</th>
                                <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                         </div>
                                        <span class="brand-name">HUSH PUPPIES</span>
                                        <span class="product-name">Hush Puppies Men's ALEX Fisherman Style Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="old-price">Tk 5,999.00</span>
                                            <span class="current-price">Tk 3,000.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                         </div>
                                        <span class="brand-name">HUSH PUPPIES</span>
                                        <span class="product-name">Hush Puppies Men's ALEX Fisherman Style Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="old-price">Tk 5,999.00</span>
                                            <span class="current-price">Tk 3,000.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                         </div>
                                        <span class="brand-name">HUSH PUPPIES</span>
                                        <span class="product-name">Hush Puppies Men's ALEX Fisherman Style Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="old-price">Tk 5,999.00</span>
                                            <span class="current-price">Tk 3,000.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                                                                </div>
                                        <span class="brand-name">BATA</span>
                                        <span class="product-name">Bata MACHO Men's Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="current-price">Tk 1,299.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                                                                </div>
                                        <span class="brand-name">BATA</span>
                                        <span class="product-name">Bata MACHO Men's Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="current-price">Tk 1,299.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                                                                </div>
                                        <span class="brand-name">BATA</span>
                                        <span class="product-name">Bata MACHO Men's Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="current-price">Tk 1,299.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                                                                </div>
                                        <span class="brand-name">BATA</span>
                                        <span class="product-name">Bata MACHO Men's Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="current-price">Tk 1,299.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                  <th class="product-col">
                                    <div class="product-info">
                                        <div class="product-image-box">
                                                                                </div>
                                        <span class="brand-name">BATA</span>
                                        <span class="product-name">Bata MACHO Men's Belt Sandal</span>
                                        <div class="price-box">
                                            <span class="current-price">Tk 1,299.00</span>
                                        </div>
                                        <button class="shop-now-btn">SHOP NOW</button>
                                        <a href="javascript:void(0)" class="remove-product-btn">Remove</a>
                                    </div>
                                </th>
                                </tr>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">DESCRIPTION</td>
                                <td class="data-cell">Premium leather fisherman sandal...</td>
                                <td class="data-cell">Comfortable, durable men's sandal...</td>
                            </tr>
                             <tr>
                                <td class="attribute-col-label">DESCRIPTION</td>
                                <td class="data-cell">Premium leather fisherman sandal...</td>
                                <td class="data-cell">Comfortable, durable men's sandal...</td>
                            </tr>
                             <tr>
                                <td class="attribute-col-label">DESCRIPTION</td>
                                <td class="data-cell">Premium leather fisherman sandal...</td>
                                <td class="data-cell">Comfortable, durable men's sandal...</td>
                            </tr>
                             <tr>
                                <td class="attribute-col-label">DESCRIPTION</td>
                                <td class="data-cell">Premium leather fisherman sandal...</td>
                                <td class="data-cell">Comfortable, durable men's sandal...</td>
                            </tr>
                             <tr>
                                <td class="attribute-col-label">DESCRIPTION</td>
                                <td class="data-cell">Premium leather fisherman sandal...</td>
                                <td class="data-cell">Comfortable, durable men's sandal...</td>
                            </tr>

                            <tr>
                                <td class="attribute-col-label">AVAILABILITY</td>
                                <td class="data-cell">In Stock</td>
                                <td class="data-cell">Limited Stock</td>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">PRODUCT TYPE</td>
                                <td class="data-cell">Footwear / Sandal</td>
                                <td class="data-cell">Footwear / Sandal</td>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">SKU</td>
                                <td class="data-cell">HP-A-2023</td>
                                <td class="data-cell">BATA-M-S-105</td>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">SIZE</td>
                                <td class="data-cell">7, 8, 9, 10, 11</td>
                                <td class="data-cell">6, 7, 8, 9, 10</td>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">COLOR</td>
                                <td class="data-cell">Black</td>
                                <td class="data-cell">Brown, Olive</td>
                            </tr>
                            <tr>
                                <td class="attribute-col-label">OPTION</td>
                                <td class="data-cell">Leather upper</td>
                                <td class="data-cell">Synthetic straps</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


        <!-- Products Section -->
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
            <div class="ps-widget__header"><h3>Sub Category</h3></div>
            <div class="ps-widget__content">
                <ul class="ps-list--checked">
                    @foreach ($subCategories as $subCategory)
                          @php
                            $subCatName = $subCategory->name;
                            $isSelected = ($selected === $subCatName);
                        @endphp
                        <li class="sub-category-item {{ $isSelected ? 'selected' : '' }}" data-id="{{ $subCategory->id }}">
                            <a href="javascript:void(0)">{{ $subCategory->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>

        <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header"><h3>Shoe Brand</h3></div>
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
            <div class="ps-widget__header"><h3>Size</h3></div>
            <div class="ps-widget__content">
                <table class="table ps-table--size">
                    <tbody>
                        
                        @foreach ($allSize->chunk(4) as $chunk)
                            <tr>
                                @foreach ($chunk as $size)
                                  @php
                                    $sizeName = strtolower($size->name);
                                    $isSelected = ($selected === $sizeName);
                                @endphp
                                    <td class="size-item {{ $isSelected ? 'selected' : '' }}" data-value="{{ $size->id }}">{{ $size->name }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </aside>

        <aside class="ps-widget--sidebar">
            <div class="ps-widget__header"><h3>Color</h3></div>
            <div class="ps-widget__content">
                <ul class="ps-list--color">
                   @foreach ($allColor as $color)
                      @php
                        $colorName = strtolower($color->name);
                        $isSelected = ($selected === $colorName);
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
$(document).on("click", ".sub-category-item, .brand-item", function() {
    $(this).toggleClass("current").siblings().removeClass("current");
    filterProducts();
});
// $(document).on("click", ".size-item", function() {
//     $(".size-item").removeClass("current");
//     $(this).addClass("current");
//     filterProducts();
// });
$(document).on("click", ".size-item", function() {
    if ($(this).hasClass("current")) {
        $(this).removeClass("current");
    } else {
        $(".size-item").removeClass("current");
        $(this).addClass("current");
    }
    filterProducts();
});
// $(document).on("click", ".color-item", function() {
//     $(".color-item").removeClass("current");
//     $(this).addClass("current");
//     filterProducts();
// });
$(document).on("click", ".color-item", function() {
    if ($(this).hasClass("current")) {
        $(this).removeClass("current");
    } else {
        $(".color-item").removeClass("current");
        $(this).addClass("current");
    }
    filterProducts();
});

$(document).on('change', '.ps-product__filter .sort-select', function() {
    let selected_value = $(this).val();
    $('.ps-product__filter .sort-select').val(selected_value); 
    filterProducts();
});


function filterProducts(page = 1) {
    let subcategory_id = $(".sub-category-item.current").data("id");
    let brand_id = $(".brand-item.current").data("id");
    let color = $(".color-item.current").data("value");
    let size = $(".size-item.current").data("value");
   let sort_by = $('.ps-product__filter .sort-select').val();
    
    $.ajax({
        url: "{{ route('products.filter') }}?page=" + page,
        type: "GET",
        data: {
            subcategory_id: subcategory_id,
            brand_id: brand_id,
            color: color,
            size: size,
            sort_by: sort_by 
        },
        success: function(response) {
            $("#product-list").html(response.products);
             $("#pagination-container_top").html(response.pagination);
             $("#pagination-container").html(response.pagination);
        }
    });
}

$(document).on('click', '#pagination-links a', function(e) {
    e.preventDefault();
    let page = $(this).attr('href').split('page=')[1];
    filterProducts(page);
});
</script>

<script> 
// =====================
document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('open-compare-modal');
    const closeBtn = document.getElementById('close-compare-modal');
    const modal = document.getElementById('product-compare-modal');

    // Function to open the modal
    if (openBtn) {
        openBtn.addEventListener('click', function() {
            modal.classList.add('is-visible');
            document.body.style.overflow = 'hidden'; 
        });
    }

    // Function to close the modal
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            modal.classList.remove('is-visible');
            document.body.style.overflow = ''; // Restores scrolling on the body
        });
    }

    // Close modal if user clicks outside the content (optional)
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('is-visible');
                document.body.style.overflow = '';
            }
        });
    }
});
</script>
@endpush
