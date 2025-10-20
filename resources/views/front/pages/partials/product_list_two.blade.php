@foreach ($products as $product)
<div class="ps-shoes--carousel">
    <div class="ps-shoe">
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
                    <a href="{{ route('front.product', $product->slug) }}">
                    <span class="btn btn-dark shop-now-button">shop now</span>
                    </a>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>
@endforeach