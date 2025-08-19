<?php

namespace App\Repositories\Back;

use App\{
    Models\Brand,
};
use App\Helpers\ImageHelper;

class BrandRepository
{

    /**
     * Store meal.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'brands');
        Brand::create($input);
    }

    /**
     * Update Brand.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($brand, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'brands',$brand,'brands/','photo');

        }
        $brand->update($input);
    }

    /**
     * Delete brand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($brand)
    {
        ImageHelper::handleDeletedImage($brand,'photo','brands');
        $brand->delete();
    }

}
