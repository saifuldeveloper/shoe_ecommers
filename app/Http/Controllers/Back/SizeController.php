<?php

namespace App\Http\Controllers\Back;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("back.size.index",[
            'datas' => \App\Models\Size::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sizes,name',
            'code' => 'required|unique:sizes,code',
        ]);

        $data = new \App\Models\Size();
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect()->route('back.size.index')->withSuccess(__('New Data Added Successfully.'));
    }

  /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status,$type)
    {
        Size::find($id)->update([$type => $status]);
        return redirect()->route('back.size.index')->withSuccess(__('Status Updated Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail($id);
        return view('back.size.edit',[
            'size'=> $size
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:sizes,name,'.$id,
            'code' => 'required|unique:sizes,code,'.$id,
        ]);

        $data = \App\Models\Size::find($id);
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect()->route('back.size.index')->withSuccess(__('Data Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = \App\Models\Size::find($id);
        if($size) {
            $size->delete();
            return redirect()->route('back.size.index')->withSuccess(__('Data Deleted Successfully.'));
        }
    }
}
