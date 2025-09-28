@if ($products->count() > 0)
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

                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                    </div>

                    <div class="ps-shoe__content">
                        <div class="ps-shoe__detail">
                            <a class="ps-shoe__name" href="product-detai.html">{{ $product->name }}</a>
                            <div>
                                <span class="ps-shoe__price"> &#2547; {{ $product->discount_price }}</span>
                            </div>
                        </div>

                        {{-- sizes --}}
                        @php 
                            $values = json_decode($product->variant_value);
                            $sizes = array_filter($values, fn($value) => is_numeric($value));
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

@else
    <div class="col-12 text-center py-5">
        <h4>No products found</h4>
    </div>
@endif
