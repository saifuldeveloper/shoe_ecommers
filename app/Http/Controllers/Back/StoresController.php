<?php

namespace App\Http\Controllers\Back;

use App\Models\Store;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::with('district')->orderBy('id', 'DESC')->get();
        return view("back.stores.index", compact("stores"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $districts = District::orderBy('id', 'DESC')->get();
        return view("back.stores.create", compact("districts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:stores,name',
            'district_id' => 'required',
            'address' => 'required',
            'area' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'mobile' => 'required',
        ]);
        $store = new Store();
        $store->name = $request->name;
        $store->slug = str($request->name)->slug();
        $store->district_id = $request->district_id;
        $store->address = $request->address;
        $store->area = $request->area;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->mobile = $request->mobile;
        $store->save();
        return redirect()->route('back.stores.index')->withSuccess(__('New Store Added Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $districts = District::orderBy('id','DESC')->get();
        $store = Store::find($id);
        return view('back.stores.edit', compact('districts','store'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:stores,name,' . $id,
            'district_id' => 'required',
            'address' => 'required',
            'area' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'mobile' => 'required',
        ]);
        $store = Store::find($id);
        if ($store) {
            $store->name = $request->name;
            $store->slug = str($request->name)->slug();
            $store->district_id = $request->district_id;
            $store->address = $request->address;
            $store->area = $request->area;
            $store->latitude = $request->latitude;
            $store->longitude = $request->longitude;
            $store->mobile = $request->mobile;
            $store->save();
            return redirect()->route('back.stores.index')->withSuccess(__('Store Updated Successfully.'));
        }
        return redirect()->route('back.stores.index')->withErrors(__('Store Not Found.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::find($id);
        if ($store) {
            $store->delete();
            return redirect()->route('back.stores.index')->withSuccess(__('Store Deleted Successfully.'));
        }
        return redirect()->route('back.stores.index')->withErrors(__('Store Not Found.'));
    }
}
