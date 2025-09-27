@php
    $cart = collect();
    if (auth()->check()) {
        $cart = App\Models\Cart::where('user_id', auth()->user()->id)->get();
    } else {
        $cart = App\Models\Cart::where('session_id', session()->get('cartSession'))->get();
    }
    $cartTotal = 0;
@endphp
<div class="cart-items-dropdown">
    @foreach ($cart as $item)
    <div class="cart-item">
        <img src="{{ asset('storage/items/' . $item->item->photo) }}"
            alt="Product">
        <div class="cart-item-details">
            <h4>{{ $item->item->name }}</h4>
            <p>3 / Off White / #MPC543</p>
            <div class="cart-item-price">{{ $item->quantity }} x Tk {{ $item->item->discount_price??}}</div>
        </div>
        <div class="cart-item-remove">✖</div>
    </div> 
    @endforeach
    
    <div class="cart-total">
        <span>Total:</span>
        <span>Tk 3,749.00</span>
    </div>
</div>