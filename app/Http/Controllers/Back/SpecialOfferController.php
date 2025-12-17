<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;

class SpecialOfferController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.offer.index',[
            'datas' => SpecialOffer::latest()->get()
        ]);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.offer.create');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:special_offers,name',
        'discount_type' => 'required|in:flat,percentage',
        'discount_value' => [
            'required',
            'numeric',
            'min:0', 
            function ($attribute, $value, $fail) use ($request) {
                if ($request->discount_type == 'percentage' && $value > 100) {
                    $fail(__('The discount value cannot exceed 100% for a percentage discount.'));
                }
                if (floatval($value) >= 1000000) { 
                    $fail(__('The discount value is too large. Max value is 999999.99.'));
                }
            },
        ],
    ]);

    // Store logic starts here after validation passes
    SpecialOffer::create([
        'name' => $request->name,
        'discount_type' => $request->discount_type,
        'discount_value' => $request->discount_value,
        'status' => true, 
    ]);

    return redirect()->route('back.offer.index')->withSuccess(__('Offer Created Successfully.'));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialOffer $offer)
    {
        return view('back.offer.show',compact('offer'));
    }


   public function update(Request $request, $id)
    {
       $offer = SpecialOffer::findOrFail($id); 
        $request->validate([
            'name' => 'required|string|max:255|unique:special_offers,name,' . $offer->id,
            'discount_type' => 'required|in:flat,percentage',
            'discount_value' => 'required|numeric|min:0|max:999999.99', 
        ]);
        $offer->update($request->all());

     return redirect()->route('back.offer.index')->withSuccess(__('Offer Updated Successfully.'));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialOffer $offer)
    {
        $offer->delete();
        return redirect()->route('back.offer.index')->withSuccess(__('Offer Deleted Successfully.'));
    }

    //status for offer
     public function status($id, $status)
    {
         SpecialOffer::find($id)->update(['status' => $status]);
        return redirect()->route('back.offer.index')->withSuccess(__('Status Updated Successfully.'));
    }



}
