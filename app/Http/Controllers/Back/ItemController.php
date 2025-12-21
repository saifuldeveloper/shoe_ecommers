<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Item,
    Models\Store,
    Models\Gallery,
    Http\Requests\ItemRequest,
    Http\Controllers\Controller,
    Http\Requests\GalleryRequest,
    Repositories\Back\ItemRepository
};
use App\Helpers\ImageHelper;
use App\Models\Category;
use App\Models\ChieldCategory;
use App\Models\Color;
use App\Models\Currency;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{

    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\ItemRepository $repository
     *
     */
    public function __construct(ItemRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }


    public function summernoteUpload(Request $request)
    {
        $name = ImageHelper::uploadSummernoteImage($request->file('image'), 'images/summernote');

        return response()->json([
            'success' => true,
            'image' => url('/core/public/storage/images/summernote/' . $name)
        ]);
    }


    public function add()
    {
        return view('back.item.add');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item_type = $request->has('item_type') ? ($request->item_type ? $request->item_type : '') : '';
        $is_type = $request->has('is_type') ? ($request->is_type ? $request->is_type : '') : '';
        $category_id = $request->has('category_id') ? ($request->category_id ? $request->category_id : '') : '';
        $orderby = $request->has('orderby') ? ($request->orderby ? $request->orderby : 'desc') : 'desc';

        $datas = Item::when($item_type, function ($query, $item_type) {
            return $query->where('item_type', $item_type);
        })
            ->when($is_type, function ($query, $is_type) {
                if ($is_type != 'outofstock') {
                    return $query->where('is_type', $is_type);
                } else {
                    return $query->whereStock(0)->whereItemType('normal');
                }
            })
            ->when($category_id, function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($orderby, function ($query, $orderby) {
                return $query->orderby('id', $orderby);
            })
            ->get();

        return view('back.item.index', [
            'datas' => $datas,
            'softDeletedItems' =>Item::onlyTrashed()->get()

        ]);
    }

    /**
     * Show the form for get subcategory a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getsubCategory(Request $request)
    {

        if ($request->category_id) {
            $data = Category::findOrFail($request->category_id);
            $data = $data->subcategory;
        } else {
            $data = [];
        }

        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for get subcategory a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getChildCategory(Request $request)
    {

        if ($request->subcategory_id) {
            $data = Subcategory::findOrFail($request->subcategory_id);
            $data = $data->childcategory;
        } else {
            $data = [];
        }

        return response()->json(['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.item.create', [
            'curr' => Currency::where('is_default', 1)->first(),
            'colors' => Color::where('status', 1)->latest()->get(),
            'sizes' => Size::where('status', 1)->latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        try {

            DB::beginTransaction();
            $item = $this->repository->store($request);
            DB::commit();

            if ($request->is_button == 0) {
                return redirect()->route('back.item.index')->withSuccess(__('Product Added Successfully.'));
            } else {
                return redirect(route('back.item.edit', $item->id))->withSuccess(__('Product Added Successfully.'));
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(__('Something went wrong.'))->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $item->load('itemVariants.variant.color', 'itemVariants.variant.size');

        $selectedColors = $item->itemVariants->map(function ($iv) {
            return optional(optional($iv->variant)->color)->name;
        })->filter()->unique()->values()->all();

        $selectedSizes = $item->itemVariants->map(function ($iv) {
            return optional(optional($iv->variant)->size)->name;
        })->filter()->unique()->values()->all();

        $variants = $item->itemVariants->map(function ($iv) {
            return [
                'id' => $iv->id,
                'variant_id' => optional($iv->variant)->id,
                'name' => optional($iv->variant)->name ?? $iv->item_code,
                'variant_sku' => $iv->variant_sku,
                'additional_cost' => $iv->additional_cost ?? 0,
                'additional_price' => $iv->additional_price ?? 0,
                'qty' => $iv->qty ?? 0,
                'color' => optional(optional($iv->variant)->color)->name ?? '',
                'size' => optional(optional($iv->variant)->size)->name ?? '',
                'item_code' => $iv->item_code ?? '',
                'position' => $iv->position ?? null,
            ];
        })->values()->all();

        return view('back.item.edit', [
            'item' => $item,
            'curr' => Currency::where('is_default', 1)->first(),
            'social_icons' => json_decode($item->social_icons, true),
            'social_links' => json_decode($item->social_links, true),
            'specification_name' => json_decode($item->specification_name, true),
            'specification_description' => json_decode($item->specification_description, true),
            'colors' => Color::where('status', 1)->latest()->get(),
            'sizes' => Size::where('status', 1)->latest()->get(),
            'selectedColors' => $selectedColors,
            'selectedSizes' => $selectedSizes,
            'variants' => $variants,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, Item $item)
    {
        try {
            DB::beginTransaction();
            $this->repository->update($item, $request);
            DB::commit();

            if ($request->is_button == 0) {
                return redirect()->route('back.item.index')->withSuccess(__('Product Updated Successfully.'));
            } else {
                return redirect(route('back.item.edit', $item->id))->withSuccess(__('Product Updated Successfully.'));
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(__('Something went wrong: ') . $e->getMessage())->withInput();
        }
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status(Item $item, $status)
    {
        $item->update(['status' => $status]);
        return redirect()->back()->withSuccess(__('Status Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $this->repository->delete($item);
        return redirect()->back()->withSuccess(__('Product Deleted Successfully.'));
    }


    public function restore($id)
    {
        $mgs = $this->repository->restore($id);
        if ($mgs['status'] == 1) {
            return redirect()->route('back.item.index')->withSuccess($mgs['message']);
        } else {
            return redirect()->route('back.item.index')->withError($mgs['message']);
        }
    }

    public function forceDelete($id)
    {
        $mgs = $this->repository->forceDelete($id);
        if ($mgs['status'] == 1) {
            return redirect()->route('back.item.index')->withSuccess($mgs['message']);
        } else {
            return redirect()->route('back.item.index')->withError($mgs['message']);
        }
    }









    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galleries(Item $item)
    {
        return view('back.item.galleries', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\GalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function galleriesUpdate(GalleryRequest $request)
    {
        $this->repository->galleriesUpdate($request);
        return redirect()->back()->withSuccess(__('Gallery Information Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galleryDelete(Gallery $gallery)
    {
        $this->repository->galleryDelete($gallery);
        return redirect()->back()->withSuccess(__('Successfully Deleted From Gallery.'));
    }


    public function highlight(Item $item)
    {
        return view('back.item.highlight', [
            'item' => $item
        ]);
    }
    public function highlight_update(Item $item, Request $request)
    {
        $this->repository->highlight($item, $request);
        return redirect()->route('back.item.index')->withSuccess(__('Product Updated Successfully.'));
    }




    // ---------------- DIGITAL PRODUCT START ---------------//

    public function deigitalItemCreate()
    {
        return view('back.item.digital.create', [
            'curr' => Currency::where('is_default', 1)->first()
        ]);
    }

    public function deigitalItemStore(ItemRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.item.index')->withSuccess(__('New Product Added Successfully.'));
    }

    public function deigitalItemEdit($id)
    {
        $item = Item::findOrFail($id);

        return view('back.item.digital.edit', [
            'item' => $item,
            'curr' => Currency::where('is_default', 1)->first(),
            'social_icons' => json_decode($item->social_icons, true),
            'social_links' => json_decode($item->social_links, true),
            'specification_name' => json_decode($item->specification_name, true),
            'specification_description' => json_decode($item->specification_description, true),
        ]);
    }


    // ---------------- LICENSE PRODUCT START ---------------//

    public function licenseItemCreate()
    {
        return view('back.item.license.create', [
            'curr' => Currency::where('is_default', 1)->first()
        ]);
    }

    public function licenseItemStore(ItemRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.item.index')->withSuccess(__('New Product Added Successfully.'));
    }

    public function licenseItemEdit($id)
    {
        $item = Item::findOrFail($id);

        return view('back.item.license.edit', [
            'item' => $item,
            'curr' => Currency::where('is_default', 1)->first(),
            'social_icons' => json_decode($item->social_icons, true),
            'social_links' => json_decode($item->social_links, true),
            'specification_name' => json_decode($item->specification_name, true),
            'specification_description' => json_decode($item->specification_description, true),
            'license_name' => json_decode($item->license_name, true),
            'license_key' => json_decode($item->license_key, true),
        ]);
    }


    public function stockOut()
    {
        $datas = Item::where('item_type', 'normal')->where('stock', 0)->get();
        return view('back.item.stockout', compact('datas'));
    }


    // public function getLiveRetailQty($code)
    // {
    //     $totalRetailQty = 0;
    //     $stores = Store::whereNotNull('api_base_url')
    //         ->whereNotNull('secret_key')
    //         ->get();

    //     foreach ($stores as $store) {
    //         try {

    //             $apiUrl = rtrim($store->api_base_url, '/') . '/product/info';

    //             $response = Http::timeout(3)->get($apiUrl, [
    //                 'code' => $code,
    //                 'secret_key' => $store->secret_key,
    //             ]);

    //             if ($response->successful()) {

    //                 $json = $response->json();

    //                 if (!empty($json['status']) && $json['status'] === true) {

    //                     $qty = $json['data']['qty'] ?? 0;

    //                     // SUM ALL STORE QTY
    //                     $totalRetailQty += (int) $qty;
    //                 }
    //             }

    //         } catch (\Throwable $e) {
    //             // এক স্টোর fail হলে অন্যগুলো চলবে
    //             continue;
    //         }
    //     }

    //     return response()->json([
    //         'qty' => $totalRetailQty
    //     ]);
    // }



    // public function getLiveRetailQty($code)
    // {
    //     $totalRetailQty = 0;
    //     $debug = [];

    //     $stores = Store::whereNotNull('api_base_url')
    //         ->whereNotNull('secret_key')
    //         ->get();



    //     foreach ($stores as $store) {
    //         try {
    //             $apiUrl = rtrim($store->api_base_url, '/') . '/product/info';
    //             $response = Http::timeout(3)->get($apiUrl, [
    //                 'code' => $code,
    //                 'secret_key' => $store->secret_key,
    //             ]);

    //             if ($response->successful()) {
    //                 $json = $response->json();
    //                 // store-wise debug
    //                 $debug[] = [
    //                     'store' => $store->name ?? $store->id,
    //                     'response' => $json
    //                 ];

    //                 if (!empty($json['status']) && $json['status'] === true) {
    //                     $qty = $json['data']['qty'] ?? 0;
    //                     $totalRetailQty += (int) $qty;
    //                 }
    //             } else {
    //                 $debug[] = [
    //                     'store' => $store->name ?? $store->id,
    //                     'response' => 'HTTP FAILED'
    //                 ];
    //             }

    //         } catch (\Throwable $e) {
    //             $debug[] = [
    //                 'store' => $store->name ?? $store->id,
    //                 'error' => $e->getMessage()
    //             ];
    //             continue;
    //         }
    //     }

    //     return response()->json([
    //         'qty' => $totalRetailQty,
    //         'debug' => $debug
    //     ]);
    // }





    public function getLiveRetailQty($code)
    {
        $totalRetailQty = 0;
        $storesOutput = [];

        $stores = Store::whereNotNull('api_base_url')
            ->whereNotNull('secret_key')
            ->get();

        foreach ($stores as $store) {
            try {
                $apiUrl = rtrim($store->api_base_url, '/') . '/product/info';

                $response = Http::timeout(3)->get($apiUrl, [
                    'code' => $code,
                    'secret_key' => $store->secret_key,
                ]);

                if ($response->successful()) {
                    $json = $response->json();

                    if (!empty($json['status']) && $json['status'] === true) {

                        $storeQty = (int) ($json['data']['qty'] ?? 0);
                        $totalRetailQty += $storeQty;


                        // dd($json['data']['product_variants']);
                        // --- Variant List ---
                        $variants = [];
                        if (!empty($json['data']['product_variants']) && is_array($json['data']['product_variants'])) {
                            foreach ($json['data']['product_variants'] as $variant) {
                                $variants[] = [
                                    'variant' => $variant['item_code'] ?? '',
                                    'qty' => (int) ($variant['qty'] ?? 0),
                                ];
                            }
                        }

                        // Store Output
                        $storesOutput[] = [
                            'store' => $store->name ?? $store->id,
                            'total_qty' => $storeQty,
                            'variants' => $variants
                        ];
                    }

                }

            } catch (\Throwable $e) {
                $storesOutput[] = [
                    'store' => $store->name ?? $store->id,
                    'error' => $e->getMessage()
                ];
                continue;
            }
        }

        return response()->json([
            'total_qty' => $totalRetailQty,
            'stores' => $storesOutput
        ]);
    }

}
