<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Store;
use App\Models\ItemVariant;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RetailerOrderSendService
{
    public function handle(Request $request): array
    {
        DB::beginTransaction();
        try {
            $prepared = $this->prepareProducts($request);
            $store = $this->validateStore($request->store_id);
            $productInfo = $this->fetchProductInfo($prepared['products'], $store);
            $payload = $this->buildPayload($request, $productInfo);

            // API call with dynamic base URL
            $this->sendOrder($payload, $store->api_base_url);

            // ONLY THIS FIELD UPDATE on success
            Order::update('sale_note', $request->sale_note);
            OrderDetails::whereIn('id', $prepared['detail_ids'])->update(['send_retailer' => 1]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Order successfully sent',
            ];
        } catch (\Throwable $e) {
            DB::rollBack();

            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    private function prepareProducts(Request $request): array
    {
        $orderData = $request->input('products', []);
        if (empty($orderData)) {
            throw new \Exception('No items selected');
        }

        return [
            'products' => collect($orderData)->map(function ($data) {
                $variant = ItemVariant::find($data['item_variant_id']);
                if (!$variant) {
                    throw new \Exception('Invalid item variant ID: ' . $data['item_variant_id']);
                }
                return [
                    'code' => $variant->variant_sku,
                    'qty' => (int) $data['qty'],
                ];
            })->values()->toArray(),
            'detail_ids' => array_keys($orderData),
        ];
    }

    private function validateStore(int $storeId)
    {
        $store = Store::find($storeId);
        if (!$store) {
            throw new \Exception('Invalid store');
        }
        return $store;
    }

    private function fetchProductInfo(array $products, Store $store): array
    {
        $url = rtrim($store->api_base_url, '/') . '/product/info';
        $responses = Http::pool(
            fn($pool) =>
            collect($products)->map(
                fn($item) =>
                $pool->timeout(4)->get($url, [
                    'code' => $item['code'],
                    'secret_key' => $store->secret_key,
                ])
            )->toArray()
        );

        $result = [];
        foreach ($responses as $index => $response) {
            $data = $response->json();

            if (!$response->successful() || !($data['status'] ?? false)) {
                throw new \Exception('Product not found: ' . $products[$index]['code']);
            }

            $result[] = [
                'id' => $data['data']['id'],
                'code' => $products[$index]['code'],
                'qty' => $products[$index]['qty'],
                'price' => (float) $data['data']['price'],
            ];
        }

        return $result;
    }

    private function buildPayload(Request $request, array $items): array
    {
        $productIds = $productCodes = $qty = [];
        $sale_unit = $net_unit_price = $unit_price = [];
        $discount = $tax_rate = $tax = $subtotal = $product_discount = [];

        foreach ($items as $item) {
            $lineSubtotal = $item['qty'] * $item['price'];

            $productIds[] = $item['id'];
            $productCodes[] = $item['code'];
            $qty[] = $item['qty'];
            $sale_unit[] = 'Pair';
            $net_unit_price[] = $item['price'];
            $unit_price[] = $item['price'];
            $discount[] = 0;
            $tax_rate[] = 0;
            $tax[] = 0;
            $product_discount[] = 0;
            $subtotal[] = $lineSubtotal;
        }

        $totalQty = array_sum($qty);
        $totalPrice = array_sum($subtotal);

        return [
            "secret_key" => "BJ6r5a3c1Vjz3e7exKHU5B8p5JcflsrD",
            "sale_type" => "website",
            "customer_info" => [
                "customer_group_id" => "1",
                "customer_name" => $request->customer_name,
                "phone_number" => $request->phone_number,
                "email" => $request->email,
                "address" => $request->address,
                "city" => $request->city,
            ],
            "created_at" => now()->format('d-m-Y'),
            "reference_no" => null,
            "warehouse_id_hidden" => "1",
            "warehouse_id" => "1",
            "biller_id_hidden" => "2",
            "biller_id" => "3",
            "product_code_name" => null,
            "qty" => $qty,
            "product_code" => $productCodes,
            "product_id" => $productIds,
            "sale_unit" => $sale_unit,
            "net_unit_price" => $net_unit_price,
            "discount" => $discount,
            "tax_rate" => $tax_rate,
            "tax" => $tax,
            "imei_number" => null,
            "unit_price" => $unit_price,
            "product_discount" => $product_discount,
            "subtotal" => $subtotal,
            "total_qty" => $totalQty,
            "total_discount" => "0.00",
            "total_tax" => "0.00",
            "total_price" => $totalPrice,
            "item" => count($productIds),
            "order_tax" => "0.00",
            "grand_total" => $totalPrice + $request->shipping_cost,
            "used_points" => null,
            "coupon_discount" => null,
            "sale_status" => "2",
            "coupon_active" => null,
            "coupon_id" => null,
            "pos" => "0",
            "draft" => "0",
            "payment_status" => 2,
            "paying_amount" => "0.00",
            "paid_amount" => "0.00",
            "paid_by_id" => "1",
            "acc_id" => null,
            "gift_card_id" => null,
            "cheque_no" => null,
            "payment_note" => null,
            "sale_note" => null,
            "staff_note" => null,
            "order_discount_type" => "Flat",
            "order_discount_value" => null,
            "order_discount" => "0",
            "order_tax_rate" => "0",
            "shipping_cost" => $request->shipping_cost,
        ];
    }

    private function sendOrder(array $payload, string $baseUrl): void
    {
        $url = rtrim($baseUrl, '/') . '/order/store';
        $response = Http::asJson()
            ->timeout(10)
            ->post($url, $payload);

        if ($response->failed()) {
            throw new \Exception('ERP API Error: ' . $response->body());
        }
    }
}
