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
    background-color: #f59b34; /
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

    <!-- Sidebar -->
    <div class="ps-sidebar" data-mh="product-listing">
        <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header"><h3>Sub Category</h3></div>
            <div class="ps-widget__content">
                <ul class="ps-list--checked">
                    @foreach ($subCategories as $subCategory)
                        <li class="sub-category-item" data-id="{{ $subCategory->id }}">
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
                                    <td class="size-item" data-value="{{ $size->name }}">{{ $size->name }}</td>
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
                        <li class="color-item" data-value="{{ $color->name }}">
                            <a href="javascript:void(0)" style="background-color: {{ $color->code ?? $color->name }}"></a>
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
$(document).on("click", ".size-item", function() {
    $(".size-item").removeClass("current");
    $(this).addClass("current");
    filterProducts();
});
$(document).on("click", ".color-item", function() {
    $(".color-item").removeClass("current");
    $(this).addClass("current");
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
@endpush
