@php
    $cart = collect();
    if (auth()->check()) {
        $cart = App\Models\Cart::where('user_id', auth()->user()->id)->get();
    } else {
        $cart = App\Models\Cart::where('session_id', session()->get('cartSession'))->get();
    }
    $cartTotal = 0;
@endphp
@if ($cart && $cart->count() > 0)
    <div class="cart-items-dropdown">
        @foreach ($cart as $item)
        @php
            $item_variant = App\Models\ItemVariant::where('id', $item->item_variant_id)->first();
            $item_price = $item->item->discount_price + $item_variant->additional_price;
            $cartTotal += $item_price * $item->quantity;
        @endphp
        <div class="cart-item">
            <img src="{{ asset('storage/items/' . $item->item->photo) }}"
                alt="Product">
            <div class="cart-item-details">
                <h4>{{ $item->item->name }}</h4>
                <p>{{ $item_variant->item_code??"" }}</p>
                <div class="cart-item-price">{{ $item->quantity }} x Tk {{ $item_price??"" }}</div>
            </div>
            <div class="cart-item-remove" data-cart-id="{{ $item->id }}">✖</div>
        </div> 
        @endforeach
        
        <div class="cart-total">
            <span>Total:</span>
            <span>Tk {{ $cartTotal ?? ""}}</span>
        </div>
    </div>
@else
    <div class="cart-items-dropdown">
        <p class="text-center">{{ __('Your cart is empty.') }}</p>
    </div>
@endif