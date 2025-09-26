@extends('master.front')
@section('content')
    <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">

            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker">
                        <option value="1">Shortby</option>
                        <option value="2">Name</option>
                        <option value="3">Price (Low to High)</option>
                        <option value="3">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="ps-product__columns">
                @foreach ($products as $product)
                <div class="ps-product__column">
                    <div class="ps-shoe mb-30">
                        <a href="{{ route('front.product', 'product-details') }}">
                            <div class="ps-shoe__thumbnail">
                                    <img src="{{ $product->thumbnail 
                                        ? (file_exists(public_path('storage/items/'.$product->thumbnail)) 
                                            ? url('storage/items/'.$product->thumbnail) 
                                            : url('assets/images/'.$product->thumbnail)) 
                                        : url('assets/images/default.jpg') }}" 
                                    alt="Image Not Found">
                                <img class="hover-img" src="{{ $product->photo 
                                        ? (file_exists(public_path('storage/items/'.$product->photo)) 
                                            ? url('storage/items/'.$product->photo) 
                                            : url('assets/images/'.$product->photo)) 
                                        : url('assets/images/default.jpg') }}" 
                                    alt="Image Not Found">
                                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="product-detai.html">{{ $product->name }}</a>
                                    <div> <span class="ps-shoe__price"> &#2547; {{ $product->discount_price }}</span></div>
                                </div>
                                {{-- show the size --}}
                                @php
                                    $values = json_decode($product->variant_value);  
                                    $sizes = array_filter($values, function($value) {
                                        return is_numeric($value);
                                    });
                                @endphp

                                <div class="ps-shoe__variants">
                                    <div class="text-center pb-10">
                                       <p class="ps-shoe__categories pb-5">
                                        @foreach($sizes as $size)
                                            <span>{{ $size }}</span>
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

            </div>
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker">
                        <option value="1">Shortby</option>
                        <option value="2">Name</option>
                        <option value="3">Price (Low to High)</option>
                        <option value="3">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ps-sidebar" data-mh="product-listing">
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Sub Category</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                       @foreach ($subCategories as $subCategory)
                        <li class="current"><a href="#">{{ $subCategory->name }}</a></li>
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
                        <li><a href="product-listing.html">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </aside>
         
            <div class="ps-sticky desktop">
                <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                        <h3>Size</h3>
                    </div>
                    <div class="ps-widget__content">
                        <table class="table ps-table--size">
                            <tbody>
                                <tr>
                                    @foreach ($allSize as $allSize)
                                      <td class="active">{{ $allSize->name }}</td>
                                    @endforeach
                                </tr>
                               
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
                            <li>
                                <a href="#" 
                                style="background-color: {{ $color->code ?? $color->name }};">
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
          
        </div>
    </div>
   
@endsection
