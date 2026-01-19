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
use PHPUnit\Event\Code\Throwable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\RetailerOrderSendService;

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

            //    dd($value);

            // if ($order['order_status'] == 'Delivered') {
            //     return redirect()->route('back.order.index')->withErrors(__('Order is already Delivered.'));
            // }


            // dd($order_status);
            // 🔹 Order status update
            $order->order_status = $value;
            $order->save();

            // 🔹 Related order details গুলোর status update
            // if ($hasDetails) {
            //     OrderDetails::where('order_id', $order->id)->update(['status' => 'Delivered']);
            // }

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
        $response = app(RetailerOrderSendService::class)->handle($request);
        if ($response['status']) {
            return back()->with('success', $response['message']);
        }
        return back()->with('error', $response['message']);
    }
}
