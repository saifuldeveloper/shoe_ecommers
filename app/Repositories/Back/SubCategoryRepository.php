<?php

namespace App\Repositories\Back;


use App\Models\Subcategory;

class SubCategoryRepository
{

    /**
     * Store category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        Subcategory::create($input);
    }

    /**
     * Update category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function update($category, $request)
    {
        $input = $request->all();

        $category->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($category)
    {
        $category->delete();
    }

    public function restore($id)
    {
        $category = Subcategory::onlyTrashed()->find($id);
        if ($category) {
            $category->restore();
            return ['message' => __('Subcategory Restored Successfully.'), 'status' => 1];
        } else {
            return ['message' => __('Subcategory not found.'), 'status' => 0];
        }
    }

    public function forceDelete($id)
    {
        $category = Subcategory::onlyTrashed()->find($id);
        if ($category) {
            $category->forceDelete();
            return ['message' => __('Subcategory Permanently Deleted Successfully.'), 'status' => 1];
        } else {
            return ['message' => __('Subcategory not found.'), 'status' => 0];
        }
    }

}
