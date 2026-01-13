<?php

namespace App\Http\Controllers\Back;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TopCampaignItem;
use App\Models\TopCampaignOffer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TopCampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }

    public function index()
    {
        $datas = TopCampaignOffer::orderBy('id', 'desc')->get();
        $products = Item::whereStatus(1)->select('name', 'id')->orderBy('id', 'desc')->get();

        return view('back.item.top_campaign', [
            'datas' => $datas,
            'products' => $products,
            'items' => TopCampaignItem::with('campaignItem')->orderby('id', 'desc')->get()
        ]);
    }


    public function create()
    {
        return view('back.item.top_campaign_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'campaign_title' => 'required|string|max:255',
            'campaig_product_charge' => 'required'
        ]);
        $deliveryCharge = $request->has('campaig_product_charge') ? 1 : 0;


        $slug = Str::slug($request->campaign_title);

        // make sure it is unique
        $original = $slug;
        $i = 1;
        while (TopCampaignOffer::where('campaign_slug', $slug)->exists()) {
            $slug = $original . '-' . $i;
            $i++;
        }

        TopCampaignOffer::create([
            'campaign_title' => $request->campaign_title,
            'campaign_slug' => $slug,
            'campaig_product_charge' => $deliveryCharge,
        ]);

        return redirect()
            ->route('back.campaign.offer.index')
            ->with('success', 'Campaign Offer created successfully!');
    }


    public function edit($id)
    {
        $data = TopCampaignOffer::findOrFail($id);
        return view('back.item.edit_top_campaign', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'campaign_title' => 'required|string|max:255',
        ]);

        $deliveryCharge = $request->has('campaig_product_charge') ? 1 : 0;

        $item = TopCampaignOffer::findOrFail($id);

        $item->update([
            'campaign_title' => $request->campaign_title,
            'campaig_product_charge' => $deliveryCharge
        ]);

        return redirect()
            ->route('back.campaign.offer.index')
            ->withSuccess(__('Campaign Updated Successfully.'));
    }


    public function destroy($id)
    {
    
        $data = TopCampaignOffer::findOrFail($id);

        TopCampaignItem::where('campaign_id', $data->campaign_id )->delete();

        $data->delete();
        return redirect()->route('back.campaign.offer.index')->withSuccess(__('Campaign Successfully Successfully.'));
    }



    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id, $status)
    {
        $item = TopCampaignOffer::findOrFail($id);

        $item->update([
            'campaign_status' => $status
        ]);

        return redirect()
            ->route('back.campaign.offer.index')
            ->withSuccess(__('Status Updated Successfully.'));
    }

    public function campaignStore(Request $request)
    {

        $request->validate([
            'item_id' => 'required',
            'campaign_id' => 'required'
        ]);
        if (TopCampaignItem::whereItemId($request->item_id)->exists()) {
            return redirect()->route('back.campaign.offer.index')->withError(__('Allready Added This Product.'));

        }
        foreach ($request->item_id as $itemId) {
            // Use firstOrCreate to avoid duplicates
            TopCampaignItem::firstOrCreate([
                'campaign_id' => $request->campaign_id,
                'item_id' => $itemId,
            ]);
        }

        return redirect()->route('back.campaign.offer.index')->withSuccess(__('New Product Added Successfully.'));

    }

    //change the campaign status
    public function campaignStatus($id, $status, $type)
    {
        if ($type == 'is_feature' && $status == 1) {

            if (TopCampaignItem::whereIsFeature(1)->count() == 10) {
                return redirect()->route('back.campaign.offer.index')->withError(__('10 products are allready added to feature'));
            }
        }
        $item = TopCampaignItem::findOrFail($id);
        if ($type === 'status') {
            $statusValue = $status == 1 ? 'active' : 'inactive';
            $item->update(['status' => $statusValue]);
        } else {
            $item->update([$type => $status]);
        }

        return redirect()->route('back.campaign.offer.index')->withSuccess(__('Status Updated Successfully.'));
    }

    //delete
    public function campaignofferDelete($id)
    {
        $data = TopCampaignItem::findOrFail($id);
        $data->delete();
        return redirect()->route('back.campaign.offer.index')->withSuccess(__('Product Delete Successfully Successfully.'));
    }



    public function searchProducts(Request $request)
    {
        $term = $request->get('term');

        $products = DB::table('items')
            ->where('name', 'LIKE', $term . '%') // prioritize starting letters
            ->orWhere('name', 'LIKE', '%' . $term . '%')
            ->orderByRaw("CASE WHEN name LIKE '{$term}%' THEN 0 ELSE 1 END, name")
            ->limit(10)
            ->get(['id', 'name']); // return id + name

        return response()->json($products);
    }


}
