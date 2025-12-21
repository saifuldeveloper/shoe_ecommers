@extends('master.front')
@section('content')
 <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--whishlist">
            <table class="table ps-cart__table" class="table ">
                      @include('alerts.alerts')
              <thead>
                <tr>
                  <th>Image</th>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Availability</th>
                  <th>View</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @if ($wishlist_items->count() > 0)
                @foreach ($wishlist_items as $product)
                <tr>
                   <td>
                    <a href="{{route('front.product',$product->slug)}}">
                  <img src="{{ $product->thumbnail
                      ? (file_exists(public_path('storage/items/' . $product->thumbnail))
                          ? url('storage/items/' . $product->thumbnail)
                          : url('assets/images/' . $product->thumbnail))
                      : url('assets/images/default.jpg') }}"
                      alt="Image Not Found">
                      </a>
              </td>
                  <td><a class="ps-product__preview" href="{{route('front.product',$product->slug)}}"> {{$product->name}}</a></td>
                  <td>{{PriceHelper::grandCurrencyPrice($product)}} </td>
                   <td>
                  <div>
                            <div class="d-inline text-{{$product->stock == 0 ? 'danger' : 'success'}}">{{$product->stock == 0 ? __('Out of stock') : __('In Stock')}}</div>
                   </div>
                   </td>
                  <td><a class="ps-product-link" href="{{route('front.product',$product->slug)}}">View Product</a></td>
                  <td>
                    <a href="{{route('user.wishlist.delete',$product->getWishlistItemId())}}"> 
                    <div class="ps-remove"></div>
                    </a>
                  </td>
                </tr>
               
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="3">{{__('No Product Found')}}</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection