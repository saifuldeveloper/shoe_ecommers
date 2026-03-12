<?php

namespace App\Repositories\Front;

use App\{Models\Cart, Models\Item, Models\PromoCode, Helpers\PriceHelper};
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\ItemVariant;
use App\Models\Variant;
use Illuminate\Http\Request;
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
            $request = (object) $queryArray;
            $qty_check = 0;
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
        $item = Item::with('variants')->where('id', $input['item_id'])->select('id', 'name', 'photo', 'discount_price', 'previous_price', 'slug', 'item_type', 'license_name', 'license_key', 'stock')->first();
        if (!$item) {
            abort(404);
        }

        $itemVariant = $item->variants->where('color_id', $input['color'] !== 'undefined' ? $input['color'] : null)
            ->where('size_id', $input['size'] !== 'undefined' ? $input['size'] : null)->first();

        // if ($input['color'] != 'undefined' && $input['size'] != 'undefined') {
        //     $variant = Variant::where('color_id', $input['color'])->where('size_id', $input['size'])->first();
        //     $itemVariant = ItemVariant::where('item_id', $item->id)->where('variant_id', $variant->id)->first();
        // }


        try {
            // insert into carts table
            $cart = Cart::create([
                "user_id" => auth()->check() ? auth()->user()->id : null,
                "session_id" => !auth()->check() ? session()->get('cartSession') : null,
                "item_id" => $item->id,
                "quantity" => $qty,
                "item_variant_id" => $itemVariant->id ?? null,
            ]);

            $mgs = ['message' => __('Product add successfully'), 'qty' => PriceHelper::totalCartQuantity(), 'cart_items_html' => view('includes.cart-items-dropdown')->render()];
            return $mgs;
        } catch (\Throwable $th) {
            throw $th;
        }

    }


    public function promoStore(Request $request)
    {
        $code = $request->input('code');
        $coupon = PromoCode::where('code_name', $code)->where('status', 'active')->first();

        if ($coupon) {
            // কার্ট ডাটা গেট করা
            $userId = auth()->id();
            $sessionId = session()->get('cartSession');

            $cart = Cart::when($userId, function ($q) use ($userId) {
                return $q->where('user_id', $userId);
            })->when(!$userId, function ($q) use ($sessionId) {
                return $q->where('session_id', $sessionId);
            })->get();

            $cartTotal = 0;
            foreach ($cart as $items) {
                $item_variant = ItemVariant::find($items->item_variant_id);
                $price = $items->item->discount_price ?? 0;
                $extra = $item_variant ? $item_variant->additional_price : 0;
                $cartTotal += ($price + $extra) * $items->quantity;
            }

            // ডিসকাউন্ট ক্যালকুলেশন
            $discountData = $this->getDiscount($coupon->discount, $coupon->type, $cartTotal);

            $discountValue = isset($discountData['sub']) ? $discountData['sub'] : 0;

            $sessionData = [
                'discount' => $discountValue,
                'code' => $coupon->code_name,
            ];
            Session::put('coupon', $sessionData);

            return response()->json([
                'status' => true,
                'message' => __('Promo code applied!'),
                'discount' => $discountValue
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => __('No coupon code found')
            ]);

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
