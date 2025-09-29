<?php

namespace App\Repositories\Back;

use App\Helpers\ImageHelper;
use App\Models\SocialMediaPost;

class SocialMediaPostRepository
{
    protected $model;

    public function __construct(SocialMediaPost $model)
    {
        $this->model = $model;
    }

    /**
     * Get all social media posts (latest first)
     */
    public function all()
    {
        return $this->model->orderByDesc('id')->get();
    }

    /**
     * Find a post by ID
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }


    public function store($request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {
            $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'), 'socialMediaPost');
        }

        SocialMediaPost::create($input);
    }

    public function update(SocialMediaPost $post, $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file, 'socialMediaPost', $post, 'socialMediaPost', 'photo');
        }

        $post->update($input);
    }

    public function delete($post)
    {

        ImageHelper::handleDeletedImage($post, 'photo', 'socialMediaPost');
        $post->delete();
    }
}
