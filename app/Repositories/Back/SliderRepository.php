<?php

namespace App\Repositories\Back;

use App\{
    Models\Slider,
    Helpers\ImageHelper
};

class SliderRepository
{

    /**
     * Store slider.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'slider');
        $input['logo'] = ImageHelper::handleUploadedImage($request->file('logo'),'slider');
        Slider::create($input);
    }

    /**
     * Update slider.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($slider, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'slider',$slider,'slider','photo');
        }
        if ($file = $request->file('logo')) {
            $input['logo'] = ImageHelper::handleUpdatedUploadedImage($file,'slider',$slider,'slider','logo');
        }
        $slider->update($input);
    }

    /**
     * Delete slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($slider)
    {
        ImageHelper::handleDeletedImage($slider,'photo','slider');
        ImageHelper::handleDeletedImage($slider,'logo','slider');
        $slider->delete();
    }

}
