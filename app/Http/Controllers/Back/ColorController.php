<?php

namespace App\Http\Controllers\Back;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("back.color.index", [
            'datas' => Color::orderBy('id', 'desc')->get(),
            'softdeletes' => Color::onlyTrashed()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colors,name',
            'code' => 'required|unique:colors,code',
        ]);

        $data = new Color();
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect()->route('back.color.index')->withSuccess(__('New Data Added Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id, $status, $type)
    {
        Color::find($id)->update([$type => $status]);
        return redirect()->route('back.color.index')->withSuccess(__('Status Updated Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $color = Color::find($id);
        return view('back.color.edit', [
            'color' => $color
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:colors,name,' . $id,
            'code' => 'required|unique:colors,code,' . $id,
        ]);

        $data = Color::find($id);
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect()->route('back.color.index')->withSuccess(__('Data Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Color::find($id);
        $data->delete();
        return redirect()->route('back.color.index')->withSuccess(__('Data Deleted Successfully.'));
    }
    public function restore($id)
    {
       $color = Color::onlyTrashed()->find($id);
        if ($color) {
            $color->restore();
              return redirect()->route('back.color.index')->withSuccess(__('Data Restore Successfully.'));
        } else {
            return redirect()->route('back.color.index')->withSuccess(__('Color not found.'));
        }
    }

    public function forceDelete($id)
    {
        $color = Color::onlyTrashed()->find($id);
        if ($color) {
            $color->forceDelete();
             return redirect()->route('back.color.index')->withSuccess(__('Category Permanently Deleted Successfully.'));
        } else {
             return redirect()->route('back.color.index')->withSuccess(__('Color not found.'));
        }
    }
}
