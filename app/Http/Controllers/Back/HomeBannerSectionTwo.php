<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SecondHeroSection;
use Illuminate\Support\Facades\Storage;

class HomeBannerSectionTwo extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerones = SecondHeroSection::latest('id')->get();

         return view('back.home-page.bannerTwo.index',compact('bannerones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('back.home-page.bannerTwo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner_second' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'url_second'    => 'required|max:200',
        ]);
         $path = null;

        if ($request->hasFile('banner_second')) {
            $path = $request->file('banner_second')->store('banners', 'public');
        }

        SecondHeroSection::create([
            'banner_second' => $path,
            'url_second'    => $validated['url_second'],
        ]);

        return redirect()->route('back.second.home.page.index')
            ->with('success', 'Banner created successfully.');
    }


     public function edit(string $id)
    {
        $banner = SecondHeroSection::findOrFail($id);

        return view('back.home-page.bannerTwo.edit', compact('banner'));
    }

    public function update(Request $request, string $id)
    {
        $banner = SecondHeroSection::findOrFail($id);

        $validated = $request->validate([
            'banner_second' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'url_second'    => 'required|max:200',
        ]);

        $path = $banner->banner_second;

        if ($request->hasFile('banner_second')) {

            // delete old image if exists
            if ($banner->banner_second && Storage::disk('public')->exists($banner->banner_second)) {
                Storage::disk('public')->delete($banner->banner_second);
            }

            $path = $request->file('banner_second')->store('banners', 'public');
        }

        $banner->update([
            'banner_second' => $path,
            'url_second'    => $validated['url_second'],
        ]);

        return redirect()->route('back.second.home.page.index')
            ->with('success', 'Banner updated successfully.');
    }

    public function destroy(string $id)
    {
        $banner = SecondHeroSection::findOrFail($id);

        // delete image
        if ($banner->banner_second && Storage::disk('public')->exists($banner->banner_second)) {
            Storage::disk('public')->delete($banner->banner_second);
        }

        $banner->delete();

        return redirect()->route('back.second.home.page.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
