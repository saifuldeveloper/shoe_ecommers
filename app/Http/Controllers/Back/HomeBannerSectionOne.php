<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FirstHeroSection;
use Illuminate\Support\Facades\Storage;
class HomeBannerSectionOne extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerones = FirstHeroSection::latest('id')->get();

         return view('back.home-page.bannerOne.index',compact('bannerones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('back.home-page.bannerOne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner_first' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'url_first'    => 'required|max:200',
        ]);
         $path = null;

        if ($request->hasFile('banner_first')) {
            $path = $request->file('banner_first')->store('banners', 'public');
        }

        FirstHeroSection::create([
            'banner_first' => $path,
            'url_first'    => $validated['url_first'],
        ]);

        return redirect()->route('back.first.home.page.index')
            ->with('success', 'Banner created successfully.');
    }


     public function edit(string $id)
    {
        $banner = FirstHeroSection::findOrFail($id);

        return view('back.home-page.bannerOne.edit', compact('banner'));
    }

    public function update(Request $request, string $id)
    {
        $banner = FirstHeroSection::findOrFail($id);

        $validated = $request->validate([
            'banner_first' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'url_first'    => 'required|max:200',
        ]);

        $path = $banner->banner_first;

        if ($request->hasFile('banner_first')) {

            // delete old image if exists
            if ($banner->banner_first && Storage::disk('public')->exists($banner->banner_first)) {
                Storage::disk('public')->delete($banner->banner_first);
            }

            $path = $request->file('banner_first')->store('banners', 'public');
        }

        $banner->update([
            'banner_first' => $path,
            'url_first'    => $validated['url_first'],
        ]);

        return redirect()->route('back.first.home.page.index')
            ->with('success', 'Banner updated successfully.');
    }

    public function destroy(string $id)
    {
        $banner = FirstHeroSection::findOrFail($id);

        // delete image
        if ($banner->banner_first && Storage::disk('public')->exists($banner->banner_first)) {
            Storage::disk('public')->delete($banner->banner_first);
        }

        $banner->delete();

        return redirect()->route('back.first.home.page.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
