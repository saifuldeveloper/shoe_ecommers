<div class="col-xl-4 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="card widget widget-featured-posts widget-order-summary p-4">
            <h3 class="widget-title">{{__('Order Summary')}}</h3>
            @php
            $free_shipping = DB::table('shipping_services')->whereStatus(1)->whereIsCondition(1)->first()
            @endphp

            @if ($free_shipping)
                @if ($free_shipping->minimum_price >= $cart_total)
                    <p class="free-shippin-aa"><em>{{ __('Free Shipping After order') }} {{PriceHelper::setCurrencyPrice($free_shipping->minimum_price)}}</em></p>
                @endif
            @endif

            <table class="table">
              <tr>
                <td>{{__('Cart Subtotal')}}:</td>
                <td class="text-gray-dark grand_total_get">{{PriceHelper::setCurrencyPrice($cart_total)}}</td>
              </tr>

              @if($tax != 0)
              <tr>
                <td>{{__('Estimated tax')}}:</td>
                <td class="text-gray-dark">{{PriceHelper::setCurrencyPrice($tax)}}</td>
              </tr>
              @endif

              {{-- @if (DB::table('states')->count() > 0)
              <tr class="{{Auth::check() && Auth::user()->state_id ? '' : 'd-none'}} set__state_price_tr">
                <td>{{__('State tax')}}:</td>
                <td class="text-gray-dark set__state_price">{{PriceHelper::setCurrencyPrice(Auth::check() && Auth::user()->state_id ? ($cart_total*Auth::user()->state->price/100 ): 0)}}</td>
              </tr>
              @endif --}}

              @if($discount)
              <tr>
                <td>{{__('Coupon discount')}}:</td>
                <td class="text-danger">- {{PriceHelper::setCurrencyPrice($discount ? $discount['discount'] : 0)}}</td>
              </tr>
              @endif
            
           
              <tr>
                <td>{{__('Shipping')}}:</td>
                <td class="text-gray-dark "> <span class="shipping_price_set">0</span></td>
              </tr>
          
              <tr>
                <td class="text-lg text-primary">{{__('Order total')}}</td>
                <td class="text-lg text-primary grand_total_set">{{PriceHelper::setCurrencyPrice($cart_total)}}</td>
              </tr>
            </table>
          </section>
      <!-- Items in Cart Widget-->
      <section class="card widget widget-featured-posts widget-featured-products p-4">
        <h3 class="widget-title">{{__('Items In Your Cart')}}</h3>
        {{-- @foreach ($cart as $key => $item)
         @php
            $item_variant = App\Models\ItemVariant::where('id', $item->item_variant_id)->first();
            $item_price = $item->item->discount_price + ($item_variant != null ? $item_variant->additional_price : 0);
        @endphp
        <div class="entry">
          <div class="entry-thumb"><a href="#"><img src="{{asset('storage/items/'.$item->item->photo)}}" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title"><a href="#">
                {{ Str::limit($item['name'], 45) }}

            </a></h4>
            <span class="entry-meta">{{$item->quantity}} x {{PriceHelper::setCurrencyPrice($item_price)}}</span>
            
         </div>
        </div>
        @endforeach --}}
    @foreach ($cart as $key => $item)
      @php
          $item_variant = App\Models\ItemVariant::where('id', $item->item_variant_id)->first();
          $item_price = $item->item->discount_price + ($item_variant != null ? $item_variant->additional_price : 0);
          $variant_details = '';
          if ($item_variant) {
              $details_parts = [];

              $variant_details = $item_variant->size_name ?? ($item_variant->color_name ?? $item->item->name); 
    
          }

          $old_meta_text = $item->quantity . ' x ' . PriceHelper::setCurrencyPrice($item_price);

          $display_variant_text = $item_variant ? '' : '';
      @endphp

      <div class="entry" style="display: flex; justify-content: space-between; align-items: flex-start; padding: 10px 0; border-bottom: 1px solid #eee; margin-bottom: 10px;">
          
          <div style="display: flex; align-items: flex-start;">
              <div class="entry-thumb" style="position: relative; margin-right: 15px; width: 60px; height: 60px; border-radius: 8px; overflow: hidden; flex-shrink: 0;">
                  <a href="#">
                      <img src="{{ asset('storage/items/' . $item->item->photo) }}" alt="Product" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                  </a>
                  
                  {{-- Quantity Overlay Badge --}}
                  <span>
                      {{ $item->quantity }}
                  </span>
              </div>

              {{-- TEXT CONTENT --}}
              <div class="entry-content">
                  <h4 class="entry-title" style="margin: 0; font-size: 14px; font-weight: 500; line-height: 1.2;">
                      <a href="#" style="">
                          {{ Str::limit($item['item']->name, 45) }}
                      </a>
                  </h4>
                
                  {{-- Variant Details / Meta Line --}}
                  <span class="entry-meta" style="display: block; font-size: 12px; color: #777; margin-top: 2px;">
                      @if ($item_variant)
                          {{-- {{ $display_variant_text }} --}}
                      @else
                        {{-- <span class="entry-meta">  {{ $item->item->name  }} </span> --}}
                      @endif
                  </span>
              </div>
          </div>

          {{-- RIGHT COLUMN: Price --}}
          <div class="entry-price" style="font-size: 14px; font-weight: 600; color: #333; margin-left: 10px; flex-shrink: 0;">
              {{$item->quantity}} x {{ PriceHelper::setCurrencyPrice($item_price) }}
          </div>
      </div>
  @endforeach


      </section>
    </aside>
  </div>
