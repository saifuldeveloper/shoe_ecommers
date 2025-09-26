<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\SocialMediaPost;
use App\Repositories\Back\SocialMediaPostRepository;
use Illuminate\Http\Request;

class SocialMediaPostController extends Controller
{
    public function __construct(SocialMediaPostRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }

    public function index()
    {

        return view('back.socialMediaPost.index', [
            'datas' => $this->repository->all()
        ]);
    }

    public function create()
    {
        return view('back.socialMediaPost.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => ['required', 'mimes:jpeg,jpg,png,svg,webp,avif'],
            'url'   => ['required', 'url'],
        ]);


        $this->repository->store($request);
        return redirect()->route('back.socialmediapost.index')->withSuccess(__('New Social Media Added Successfully.'));
    }

    public function edit(SocialMediaPost $socialmediapost)
    {
        return view('back.socialMediaPost.edit', compact('socialmediapost'));
    }

    public function update(Request $request, SocialMediaPost $socialmediapost)
    {

        $request->validate([
            'image' => ['nullable', 'mimes:jpeg,jpg,png,svg,webp,avif'],
            'url'   => ['required', 'url'],
        ]);

        $this->repository->update($socialmediapost, $request);

        return redirect()->route('back.socialmediapost.index')->withSuccess(__('Social Media Post Updated Successfully.'));
    }


    public function destroy(SocialMediaPost $socialmediapost)
    {
        $this->repository->delete($socialmediapost);

        return redirect()->route('back.socialmediapost.index')->withSuccess(__('Social Media Post Deleted Successfully.'));
    }

    public function status($id, $status)
    {
        $post = SocialMediaPost::findOrFail($id);
        $post->status = $status;
        $post->save();

        return redirect()
            ->route('back.socialmediapost.index')
            ->withSuccess(__('Social Media Post status updated successfully.'));
    }
}
