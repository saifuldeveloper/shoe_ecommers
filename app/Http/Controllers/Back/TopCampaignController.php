<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\CampaignItem;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\TopCampaignOffer;
class TopCampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }


    public function create()
    {
        return view('back.item.top_campaign_create');
    }

    public function edit($id)
    {
        $data = TopCampaignOffer::findOrFail($id);
        return view('back.item.edit_top_campaign',compact('data'));
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'campaign_title'   => 'required|string|max:255',
        ]);

        $item = TopCampaignOffer::findOrFail($id);

        $item->update([
            'campaign_title'   => $request->campaign_title,
        ]);

        return redirect()
            ->route('back.campaign.offer.index')
            ->withSuccess(__('Campaign Updated Successfully.'));
    }



    public function store(Request $request)
    {
       $request->validate([
        'campaign_title' => 'required|string|max:255',
        ]);

        TopCampaignOffer::create([
            'campaign_title' => $request->campaign_title,
        ]);

    return redirect()
        ->route('back.campaign.offer.index')
        ->with('success', 'Campaign Offer created successfully!');
    }

    public function index()
    {
        $datas = TopCampaignOffer::orderBy('id','desc')->get();
        return view('back.item.top_campaign',[
            'datas' => $datas,
            'items' => CampaignItem::orderby('id','desc')->get()
        ]);
    }


    public function destroy($id)
    {
        $data = TopCampaignOffer::findOrFail($id);
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

     // public function store(Request $request)
    // {
    //     $request->validate([
    //         'item_id' => 'required'
    //     ]);
    //     if(CampaignItem::whereItemId($request->item_id)->exists()){
    //         return redirect()->route('back.campaign.offer.index')->withError(__('Allready Added This Product.'));

    //     }
    //     $data = new CampaignItem();
    //     $data->create($request->all());
    //     return redirect()->route('back.campaign.offer.index')->withSuccess(__('New Product Added Successfully.'));

    // }

}
