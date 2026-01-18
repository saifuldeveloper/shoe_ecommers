<?php

namespace App\Http\Controllers\Back;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Order;
use App\Models\Store;
use App\Models\PromoCode;
use App\Helpers\SmsHelper;
use App\Models\TrackOrder;
use App\Models\ItemVariant;
use App\Models\Notification;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request->type) {
            if ($request->start_date && $request->end_date) {
                $datas = $start_date = Carbon::parse($request->start_date);
                $end_date = Carbon::parse($request->end_date);
                $datas = Order::latest('id')->whereOrderStatus($request->type)->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
            } else {
                $datas = Order::latest('id')->whereOrderStatus($request->type)->get();
            }

        } else {
            if ($request->start_date && $request->end_date) {
                $datas = $start_date = Carbon::parse($request->start_date);
                $end_date = Carbon::parse($request->end_date);
                $datas = Order::latest('id')->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
            } else {
                $datas = Order::latest('id')->get();
            }
        }

        $softDeletedDatas = Order::onlyTrashed()->latest('id')->get();
        return view('back.order.index', compact('datas', 'softDeletedDatas'));
    }


    public function edit($id)
    {

        $order = Order::findOrFail($id);
        return view('back.order.edit', compact('order'));
    }



    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // Check if order_id is available
        if (Order::where('transaction_number', $request->transaction_number)->where('id', '!=', $id)->exists()) {
            return redirect()->route('back.order.index')->withErrors(__('Order ID already exists.'));
        }

        $order->update($request->all());
        return redirect()->route('back.order.index')->withSuccess(__('Order Updated Successfully.'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice($id)
    {
        $order = Order::with('orderDetails.item')->findOrfail($id);
        $cart = json_decode($order->cart, true);
        $stores = Store::whereNotNull('api_base_url')->whereNotNull('secret_key')->get();
        $allProducts = Item::get();
        return view('back.order.invoice', compact('order', 'cart', 'stores', 'allProducts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printOrder($id)
    {
        $order = Order::findOrfail($id);
        $cart = json_decode($order->cart, true);
        return view('back.order.print', compact('order', 'cart'));
    }


    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  string  $field
     * @param  string  $value
     * @return \Illuminate\Http\Response
     */
    public function status($id, $field, $value)
    {
        $order = Order::find($id);
        $hasDetails = OrderDetails::where('order_id', $order->id)->first();

        if ($field == 'payment_status') {
            if ($order['payment_status'] == 'Paid') {
                return redirect()->route('back.order.index')->withErrors(__('Order is already paid.'));
            }
        }
        if ($field == 'order_status') {
            if ($order['order_status'] == 'Delivered') {
                return redirect()->route('back.order.index')->withErrors(__('Order is already Delivered.'));
            }

            // 🔹 Order status update
            $order->order_status = 'Delivered';
            $order->save();

            // 🔹 Related order details গুলোর status update
            if ($hasDetails) {
                OrderDetails::where('order_id', $order->id)->update(['status' => 'Delivered']);
            }

            return redirect()->route('back.order.index')->withSuccess(__('Order is already Delivered.'));
        }
        $order->update([$field => $value]);
        if ($order->payment_status == 'Paid') {
            $this->setPromoCode($order);
        }
        $this->setTrackOrder($order);

        $sms = new SmsHelper();
        $user_number = $order->user->phone;
        if ($user_number) {
            $sms->SendSms($user_number, "'order_status'", $order->transaction_number);
        }

        return redirect()->route('back.order.index')->withSuccess(__('Status Updated Successfully.'));
    }

    /**
     * Custom Function
     */
    public function setTrackOrder($order)
    {

        if ($order->order_status == 'In Progress') {
            if (!TrackOrder::whereOrderId($order->id)->whereTitle('In Progress')->exists()) {
                TrackOrder::create([
                    'title' => 'In Progress',
                    'order_id' => $order->id
                ]);
            }
        }
        if ($order->order_status == 'Canceled') {
            if (!TrackOrder::whereOrderId($order->id)->whereTitle('Canceled')->exists()) {

                if (!TrackOrder::whereOrderId($order->id)->whereTitle('In Progress')->exists()) {
                    TrackOrder::create([
                        'title' => 'In Progress',
                        'order_id' => $order->id
                    ]);
                }
                if (!TrackOrder::whereOrderId($order->id)->whereTitle('Delivered')->exists()) {
                    TrackOrder::create([
                        'title' => 'Delivered',
                        'order_id' => $order->id
                    ]);
                }

                if (!TrackOrder::whereOrderId($order->id)->whereTitle('Canceled')->exists()) {
                    TrackOrder::create([
                        'title' => 'Canceled',
                        'order_id' => $order->id
                    ]);
                }


            }
        }

        if ($order->order_status == 'Delivered') {

            if (!TrackOrder::whereOrderId($order->id)->whereTitle('In Progress')->exists()) {
                TrackOrder::create([
                    'title' => 'In Progress',
                    'order_id' => $order->id
                ]);
            }

            if (!TrackOrder::whereOrderId($order->id)->whereTitle('Delivered')->exists()) {
                TrackOrder::create([
                    'title' => 'Delivered',
                    'order_id' => $order->id
                ]);
            }
        }
    }


    public function setPromoCode($order)
    {

        $discount = json_decode($order->discount, true);
        if ($discount != null) {
            $code = PromoCode::find($discount['code']['id']);
            $code->no_of_times--;
            $code->update();
        }
    }


    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->tranaction->delete();
        if (Notification::where('order_id', $id)->exists()) {
            Notification::where('order_id', $id)->delete();
        }
        if (count($order->tracks_data) > 0) {
            foreach ($order->tracks_data as $track) {
                $track->delete();
            }
        }
        $order->delete();
        return redirect()->back()->withSuccess(__('Order Deleted Successfully.'));
    }


    public function restore($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();
        if ($order->tranaction()->onlyTrashed()->exists()) {
            $order->tranaction()->onlyTrashed()->first()->restore();
        }
        if (Notification::where('order_id', $id)->onlyTrashed()->exists()) {
            Notification::where('order_id', $id)->onlyTrashed()->restore();
        }
        if (TrackOrder::where('order_id', $id)->onlyTrashed()->exists()) {
            TrackOrder::where('order_id', $id)->onlyTrashed()->restore();
        }
        return redirect()->back()->withSuccess(__('Order Restored Successfully.'));
    }

    public function forceDelete($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        if ($order->tranaction()->onlyTrashed()->exists()) {
            $order->tranaction()->onlyTrashed()->first()->forceDelete();
        }
        if (Notification::where('order_id', $id)->onlyTrashed()->exists()) {
            Notification::where('order_id', $id)->onlyTrashed()->forceDelete();
        }
        if (TrackOrder::where('order_id', $id)->onlyTrashed()->exists()) {
            TrackOrder::where('order_id', $id)->onlyTrashed()->forceDelete();
        }
        $order->forceDelete();
        return redirect()->back()->withSuccess(__('Order Permanently Deleted Successfully.'));
    }



    // public function sendRetailerOrder(Request $request)
    // {
    //     $products = $request->products;
    //     $store = Store::find($request->store_id);

    //     $productIds = [];
    //     $failedProducts = [];
    //     if (!$store || empty($products)) {
    //         return back()->with('error', 'Invalid store or products');
    //     }
    //     $apiUrl = rtrim($store->api_base_url, '/') . '/product/info';
    //     try {
    //         foreach ($products as $item) {
    //             if (!isset($item['code'])) {
    //                 continue;
    //             }
    //             $response = Http::timeout(4)->get($apiUrl, [
    //                 'code' => $item['code'],
    //                 'secret_key' => $store->secret_key,
    //             ]);
    //             $responseData = $response->json();
    //             if ($response->successful() && ($responseData['status'] ?? false)) {
    //                 if (isset($responseData['data']['id'])) {
    //                     $productIds[] = $responseData['data']['id'];
    //                 }
    //             } else {
    //                 $failedProducts[] = $item['code'];
    //             }
    //         }
    //     } catch (\Throwable $e) {
    //         return back()->with('error', 'Something went wrong while connecting to store API');
    //     }

    //     if (!empty($failedProducts)) {
    //         return back()->with(
    //             'warning',
    //             'Some products not found: ' . implode(', ', $failedProducts)
    //         );
    //     }

    //     // 
    //     // order send






    //     return back()->with('success', 'Products processed successfully');
    // }

    public function orderItemDelete($id)
    {
        $orderDetail = OrderDetails::find($id);
        if (!$orderDetail) {
            return response()->json([
                'status' => 'error',
                'message' => 'Order item not found'
            ], 404);
        }
        if ($orderDetail->send_retailer == 1) {
            return response()->json([
                'status' => 'error',
                'message' => 'This item has already been sent to retailer. You cannot delete it.'
            ], 403);
        }
        $orderDetail->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Order item deleted successfully'
        ]);

    }




    public function sendRetailerOrder(Request $request)
    {
        $orderData = $request->input('products', []);
        if (empty($orderData)) {
            return back()->with('error', 'No items selected');
        }

        /** 2️⃣ Collect IDs */
        $detailIds = array_keys($orderData);
        $variantIds = collect($orderData)->pluck('item_variant_id')->unique()->toArray();

        /** 3️⃣ Fetch DB data (single query each) */
        $details = OrderDetails::whereIn('id', $detailIds)->get()->keyBy('id');
        $variants = ItemVariant::whereIn('id', $variantIds)->get()->keyBy('id');



        /** 4️⃣ Update order details + prepare products */
        foreach ($orderData as $detailId => $data) {
            $detail = $details[$detailId] ?? null;
            $variant = $variants[$data['item_variant_id']] ?? null;
            if (!$detail || !$variant) {
                continue;
            }
            $detail->update([
                'item_variant_id' => $variant->id,
                'item_variant_sku' => $variant->variant_sku,
                'qty' => $data['qty'],
                // 'send_retailer' => 1,
            ]);

            $products[] = [
                'code' => $variant->variant_sku,
                'qty' => (int) $data['qty'],
            ];
        }

        /** 5️⃣ Validate store */
        $store = Store::find($request->store_id);
        if (!$store || empty($products)) {
            return back()->with('error', 'Invalid store or products');
        }
        /** 6️⃣ Parallel product info API */
        $productInfoUrl = rtrim($store->api_base_url, '/') . '/product/info';

        $responses = Http::pool(
            fn($pool) =>
            collect($products)->map(
                fn($item) =>
                $pool->timeout(4)->get($productInfoUrl, [
                    'code' => $item['code'],
                    'secret_key' => $store->secret_key,
                ])
            )->toArray()
        );

        /** 7️⃣ Prepare order calculation */
        $productIds = [];
        $productCodes = [];
        $qty = [];
        $sale_unit = [];
        $net_unit_price = [];
        $discount = [];
        $tax_rate = [];
        $tax = [];
        $subtotal = [];
        $unit_price = [];
        $product_discount = [];
        $imei_number =[];

        foreach ($responses as $index => $response) {

            $item = $products[$index];
            $data = $response->json();
            if (!$response->successful() || !($data['status'] ?? false)) {
                return back()->with('error', 'Product not found: ' . $item['code']);
            }

            $price = (float) $data['data']['price'];
            $lineSubtotal = $item['qty'] * $price;

            $productIds[] = $data['data']['id'];
            $productCodes[] = $item['code'];
            $qty[] = (int) $item['qty'];

            $sale_unit[] = 'Pair';
            $net_unit_price[] = $price;
            $unit_price[] = $price;

            $discount[] = 0;
            $tax_rate[] = 0;
            $tax[] = 0;
            $product_discount[] = 0;
            $imei_number =null;

            $subtotal[] = $lineSubtotal;
        }

        /** Totals */
        $totalQty = array_sum($qty);
        $totalPrice = array_sum($subtotal);

        $count = count($productIds);

   

        $payload = [
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

            "created_at" => "17-01-2026",
            "reference_no" => null,

            "warehouse_id_hidden" => "1",
            "warehouse_id" => "1",
            "biller_id_hidden" => "2",
            "biller_id" => "3",
            // "customer_id_hidden" => "4",
            // "customer_id" => "4",

            "product_code_name" => null,

            "qty" => $qty,
            "product_code" => $productCodes,
            "product_id" => $productIds,

            "sale_unit" => $sale_unit,
            "net_unit_price" => $net_unit_price,
            "discount" => $discount,
            "tax_rate" => $tax_rate,
            "tax" => $tax,
            "subtotal" => $subtotal,
            "imei_number" => $imei_number,
            "unit_price" => $unit_price,
            "product_discount" => $product_discount,

            "total_qty" => $totalQty,
            "total_discount" => "0.00",
            "total_tax" => "0.00",
            "total_price" => $totalPrice,
            "item" => $count,
            "order_tax" => "0.00",
            "grand_total" => $totalPrice + $request->shipping_cost, 

            "used_points" => null,
            "coupon_discount" => null,
            "sale_status" => "1",
            "coupon_active" => null,
            "coupon_id" => null,
            "pos" => "0",
            "draft" => "0",
            "payment_status"=>2,
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


        

        $response = Http::asJson()
            ->timeout(10)
            ->post('http://erp_pos_two.test/api/v1/order/store', $payload);

        if ($response->failed()) {
            dd([
                'status' => $response->status(),
                'error' => $response->body(),
            ]);
            $message = 'Something went worng';
        } else {
            $message = 'Order Successfully send Done';
        }


        return back()->withSuccess(__($message));
    }
}
