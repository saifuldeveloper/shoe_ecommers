<?php

namespace App\Repositories\Front;

use App\{
    Models\Cart,
    Models\Item,
    Models\PromoCode,
    Helpers\PriceHelper
};
use App\Models\AttributeOption;
use App\Models\Attribute;
use App\Models\ItemVariant;
use App\Models\Variant;
use Illuminate\Support\Facades\Session;

class CartRepository
{

    /**
     * Store cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store($request)
    {

        if (empty($request->all())) {
            $parsedUrl = parse_url($request->getRequestUri(), PHP_URL_QUERY); // Extracts the query part
            parse_str($parsedUrl, $queryArray);
            $request = (object)$queryArray;
            $qty_check  = 0;
            $input = $queryArray;
        } else {
            $input = $request->all();
        }
        if (!session()->has('cartSession')) {
            session()->put('cartSession', md5(request()->ip() . uniqid()));
        }

        $qty = isset($input['quantity']) ? $input['quantity'] : 1;
        $qty = is_numeric($qty) ? $qty : 1;

        $cart = Cart::where('item_id', $input['item_id'])
            ->where(function ($query) {
                if (auth()->check()) {
                    $query->where('user_id', auth()->user()->id);
                } else {
                    $query->where('session_id', session()->get('cartSession'));
                }
            })
            ->first();
        if ($cart) {
            $qty = $cart->quantity + $qty;
            $cart->update(['quantity' => $qty]);
            $data = ['message' => 'This product already on your cart', 'status' => 'alreadyInCart', 'qty' => PriceHelper::totalCartQuantity(), 'cart_items_html' => view('includes.cart-items-dropdown')->render()];
            return $data;
        }
        $item = Item::where('id', $input['item_id'])->select('id', 'name', 'photo', 'discount_price', 'previous_price', 'slug', 'item_type', 'license_name', 'license_key', 'stock')->first();
        if (!$item) {
            abort(404);
        }
        
        // if ($item->item_type == 'normal') {
        //     if ($item->stock < (int)$request->quantity) {
        //         $data = ['message' => 'Product Out Of Stock', 'status' => 'outStock'];
        //         return $data;
        //     }
        // }
        $variant = Variant::where('color_id', $input['color'])->where('size_id', $input['size'])->first();
        if(!$variant){
            $data = ['message' => 'This color/size variant not found', 'status' => 'outStock'];
            return $data;
        }
        $itemVariant = ItemVariant::where('item_id', $item->id)->where('variant_id', $variant->id)->first();
        if(!$itemVariant){
            $data = ['message' => 'This color/size variant not found', 'status' => 'outStock'];
            return $data;
        }
       // insert into carts table
        $cart = Cart::create([
            "user_id" => auth()->check() ? auth()->user()->id : null,
            "session_id" => !auth()->check() ?  session()->get('cartSession'): null,
            "item_id" => $item->id,
            "quantity" => $qty,
            "item_variant_id" => $itemVariant->id,
        ]);
        
        $mgs = ['message' => __('Product add successfully'), 'qty' => PriceHelper::totalCartQuantity(), 'cart_items_html' => view('includes.cart-items-dropdown')->render()];
        return $mgs;
        
    }

    public function promoStore($request)
    {

        $input = $request->all();
        $promo_code = PromoCode::where('status', 1)->whereCodeName($input['code'])->where('no_of_times', '>', 0)->first();

        if ($promo_code) {
            $cart = Session::get('cart');
            $cartTotal = PriceHelper::cartTotal($cart, 2);
            $discount = $this->getDiscount($promo_code->discount, $promo_code->type, $cartTotal);

            $coupon = [
                'discount' => $discount['sub'],
                'code'  => $promo_code
            ];
            Session::put('coupon', $coupon);

            return [
                'status'  => true,
                'message' => __('Promo code found!')
            ];
        } else {
            return [
                'status'  => false,
                'message' => __('No coupon code found')
            ];
        }
    }



    public function getCart()
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        return $cart;
    }

    public function getDiscount($discount, $type, $price)
    {
        if ($type == 'amount') {
            $sub = $discount;
            $total = $price - $sub;
        } else {
            $val = $price / 100;
            $sub = $val * $discount;
            $total = $price - $sub;
        }

        return [
            'sub' => $sub,
            'total' => $total
        ];
    }
}
