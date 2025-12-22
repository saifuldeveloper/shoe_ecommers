<?php

namespace App\Http\Controllers\Back;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::orderBy('id', 'DESC')->get();
        $softdeletes = District::onlyTrashed()->get();
        return view('back.district.index', compact('districts','softdeletes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts,name',
        ]);
        $district = new District();
        $district->name = $request->name;
        $district->slug = str($request->name)->slug();
        $district->save();
        return redirect()->route('back.districts.index')->withSuccess(__('New District Added Successfully.'));
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
        $district = District::find($id);
        if ($district) {
            return view('back.district.edit', compact('district'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts,name,' . $id,
        ]);
        $district = District::find($id);
        if ($district) {
            $district->name = $request->name;
            $district->slug = str($request->name)->slug();
            $district->save();
            return redirect()->route('back.districts.index')->withSuccess(__('District Updated Successfully.'));
        }
        return redirect()->route('back.districts.index')->withErrors(__('District Not Found.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);
        if ($district) {
            $district->delete();
            return redirect()->route('back.districts.index')->withSuccess(__('District Deleted Successfully.'));
        }
        return redirect()->route('back.districts.index')->withErrors(__('District Not Found.'));
    }


    public function restore($id)
    {
        $districts = District::onlyTrashed()->find($id);
        if ($districts) {
            $districts->restore();
            return redirect()->route('back.districts.index')->withSuccess(__('Data Restore Successfully.'));
        } else {
            return redirect()->route('back.districts.index')->withSuccess(__('District not found.'));
        }
    }

    public function forceDelete($id)
    {
        $districts = District::onlyTrashed()->find($id);
        if ($districts) {
            $districts->forceDelete();
            return redirect()->route('back.districts.index')->withSuccess(__('Category Permanently Deleted Successfully.'));
        } else {
            return redirect()->route('back.districts.index')->withSuccess(__('District not found.'));
        }
    }
}
