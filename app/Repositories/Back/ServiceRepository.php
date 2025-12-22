<?php

namespace App\Repositories\Back;

use App\{
    Models\Service,
    Helpers\ImageHelper
};

class ServiceRepository
{

    /**
     * Store service.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'), 'service');
        Service::create($input);
    }

    /**
     * Update service.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($service, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file, 'service', $service, 'service', 'photo');
        }
        $service->update($input);
    }

    /**
     * Delete service.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($service)
    {

        ImageHelper::handleDeletedImage($service, 'photo', 'service');
        $service->delete();
    }


    public function restore($id)
    {
        $service = Service::onlyTrashed()->find($id);
        if ($service) {
            $service->restore();
            return ['message' => __('Service Restored Successfully.'), 'status' => 1];
        } else {
            return ['message' => __('Service not found.'), 'status' => 0];
        }
    }

    public function forceDelete($id)
    {
        $service = Service::onlyTrashed()->find($id);
        if ($service) {
            ImageHelper::handleDeletedImage($service, 'photo', 'service');
            $service->forceDelete();
            return ['message' => __('Service Permanently Deleted Successfully.'), 'status' => 1];
        } else {
            return ['message' => __('Service not found.'), 'status' => 0];
        }
    }

}
