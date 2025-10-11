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
.color-item.current {
    border-color: #f59b34;
    box-shadow: 3px 2px 1px 7px #f59b34
}
.search_product{
    margin-top: 18px;
}
.pagination-footer {

    display: flex; 
    flex-direction: column;
    align-items: center; 
    text-align: center; 
    width: 100%; 
}

.pagination-count, 
.pagination-links {
    margin-bottom: 10px; 
}
</style>
@endpush
<div class="ps-products-wrap">
      <h2>Your search for <strong>"{{ request()->input('q') }}"</strong> revealed the following:</h2>
    <div class="search_product" data-mh="product-listing">
        <!-- Products Section -->
       
        <div class="row ps-product__columns" id="product-list">
             @if ($products->isEmpty())
                <p>No products found in this category.</p>
            @else
            @foreach ($products as $product)
                <div class="ps-product__column">
                    <div class="ps-shoe mb-30">
                        <a href="{{ route('front.product', $product->slug) }}">
                            <div class="ps-shoe__thumbnail">
                                <img src="{{ $product->thumbnail ? (file_exists(public_path('storage/items/'.$product->thumbnail)) ? url('storage/items/'.$product->thumbnail) : url('assets/images/'.$product->thumbnail)) : url('assets/images/default.jpg') }}" 
                                    alt="Image Not Found">

                                <img class="hover-img" 
                                    src="{{ $product->photo ? (file_exists(public_path('storage/items/'.$product->photo)) ? url('storage/items/'.$product->photo) : url('assets/images/'.$product->photo)) : url('assets/images/default.jpg') }}" 
                                    alt="Image Not Found">

                            <a href="#" 
                                class="ps-shoe__favorite add-to-wishlist" 
                                data-id="{{ $product->id }}">
                                    <i class="ps-icon-heart"></i>
                                </a>
                            </div>

                            <div class="ps-shoe__content">
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">{{ $product->name }}</a>
                                    <div>
                                        <span class="ps-shoe__price"> &#2547; {{ $product->discount_price }}</span>
                                    </div>
                                </div>
                                <div class="ps-shoe__variants">
                                    <div class="text-center pb-10">
                                        <p class="ps-shoe__categories pb-5">
                                            @php
                                                $sizes = collect($product->variants ?? [])->pluck('size')->unique('id')->filter();
                                            @endphp
                                            @foreach ($sizes as $size)
                                            @if (isset($size->id))
                                            <span for="size{{ $size->id }}">{{ $size->name }}</span>
                                            @endif
                                        @endforeach
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
            @endforeach
        @endif
        </div>
    </div>
    @if ($products instanceof \Illuminate\Pagination\LengthAwarePaginator && $products->total() > 0)
        <div class="pagination-footer mt-4 d-flex justify-content-between align-items-center">
            <div class="pagination-count">
                Showing: 
                <span class="font-weight-bold">{{ $products->firstItem() }}</span> - 
                <span class="font-weight-bold">{{ $products->lastItem() }}</span> of 
                <span class="font-weight-bold">{{ $products->total() }}</span> total
            </div>

            <div class="pagination-links">
               {{ $products->withQueryString()->links() }}
            </div>
        </div>
    @endif
</div>
@endsection


