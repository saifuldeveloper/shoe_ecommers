@extends('master.front')
@section('content')
 <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--whishlist">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>View</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            @if ($wishlist_items->count() > 0)
                @foreach ($wishlist_items as $product)
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> air jordan One mid</a></td>
                  <td>$150</td>
                  <td><a class="ps-product-link" href="product-detail.html">View Product</a></td>
                  <td>
                    <div class="ps-remove"></div>
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