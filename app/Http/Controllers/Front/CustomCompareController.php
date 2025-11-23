<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Session;

class CustomCompareController extends Controller
{
    // Maximum number of products allowed for comparison
    const MAX_COMPARE_ITEMS = 4;
    const COMPARE_SESSION_KEY = 'compare_products';

    /**
     * Get the list of products currently in the comparison session.
     */
    public function getProducts()
    {
        $productIds = Session::get(self::COMPARE_SESSION_KEY, []);
        
        // Fetch product details from the database
        // NOTE: Use 'variants' relation if needed, or adjust fields as necessary
        $products = Item::whereIn('id', $productIds)->get();

        $formattedItems = $products->map(function ($product) {
            // Format data for the JavaScript side
            return [
                'id' => $product->id,
                'name' => $product->name,
                'brand_name' => $product->brand_name ?? 'N/A', // Assuming a brand_name field
                'current_price' => number_format($product->discount_price, 2) ?? number_format($product->price, 2),
                'old_price' => $product->discount_price < $product->price ? number_format($product->price, 2) : null,
                'thumbnail_url' => $product->thumbnail ? asset('storage/items/' . $product->thumbnail) : asset('assets/images/default.jpg'),
                'url' => route('front.product', $product->slug),
                
                // Static/Dummy Attributes for demonstration.
                'attributes' => [
                    'description' => substr(strip_tags($product->details ?? 'N/A'), 0, 50) . '...',
                    'availability' => $product->stock > 0 ? 'In Stock' : 'Out of Stock',
                    'product_type' => $product->category->name ?? 'N/A',
                    'sku' => $product->sku ?? 'N/A',
                    'size' => $product->variants->pluck('size.name')->filter()->unique()->implode(', ') ?? 'N/A',
                    'color' => $product->variants->pluck('color.name')->filter()->unique()->implode(', ') ?? 'N/A',
                    'option' => 'N/A', 
                ]
            ];
        });

        return response()->json([
            'status' => 'success',
            'products' => $formattedItems,
            'count' => $formattedItems->count()
        ]);
    }

    /**
     * Add a product to the comparison list.
     */
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $productIds = Session::get(self::COMPARE_SESSION_KEY, []);

        if (!$productId || !Item::find($productId)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid product ID.'], 404);
        }

        if (in_array($productId, $productIds)) {
            return $this->getProducts(); 
        }

        if (count($productIds) >= self::MAX_COMPARE_ITEMS) {
            return response()->json([
                'status' => 'limit_reached', 
                'message' => 'You can compare a maximum of ' . self::MAX_COMPARE_ITEMS . ' products.',
            ], 403);
        }

        $productIds[] = $productId;
        Session::put(self::COMPARE_SESSION_KEY, array_values(array_unique($productIds))); // array_values to reset keys
        
        return $this->getProducts();
    }

    /**
     * Remove a product from the comparison list.
     */
    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $productIds = Session::get(self::COMPARE_SESSION_KEY, []);
        
        $productIds = array_diff($productIds, [$productId]); // Remove the product ID
        
        Session::put(self::COMPARE_SESSION_KEY, array_values($productIds));
        
        return $this->getProducts();
    }

    /**
     * Clear all products from the comparison list.
     */
    public function clear()
    {
        Session::forget(self::COMPARE_SESSION_KEY);
        return response()->json([
            'status' => 'success',
            'products' => [],
            'count' => 0,
            'message' => 'Comparison list cleared.'
        ]);
    }
}
