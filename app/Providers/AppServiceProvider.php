<?php

namespace App\Providers;

use Illuminate\{
    Support\ServiceProvider,
    Support\Facades\DB
};
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Cache;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    // public function boot()
    // {
    //     Paginator::useBootstrap();
    //     view()->composer('*', function ($settings) {
    //         $settings->with('setting', DB::table('settings')->find(1));
    //         $settings->with('extra_settings', DB::table('extra_settings')->find(1));
    //         $settings->with('menus', DB::table('menus')->find(1));

    //         if (!session()->has('popup')) {
    //             view()->share('visit', 1);
    //         }
    //         session()->put('popup', 1);
    //     });
    // }

    // public function boot(): void
    // {
    //     Paginator::useBootstrap();

    //     View::composer('*', function ($view) {

    //         // Settings (single call, OK)
    //         $view->with('setting', DB::table('settings')->find(1));
    //         $view->with('extra_settings', DB::table('extra_settings')->find(1));
    //         $view->with('menus', DB::table('menus')->find(1));

    //         // 🔥 Wishlist (FAST + SAFE)
    //         $wishlists = auth()->check()
    //             ? cache()->remember(
    //                 'wishlist_' . Auth::id(),
    //                 300,
    //                 fn() => Wishlist::whereUserId(Auth::id())
    //                     ->pluck('item_id')
    //                     ->flip()
    //             )
    //             : collect();

    //         $view->with('wishlists', $wishlists);

    //         // Popup logic (cleaned)
    //         if (!session()->has('popup')) {
    //             $view->with('visit', 1);
    //             session()->put('popup', 1);
    //         }
    //     });
    // }


    public function boot(): void
    {
        Paginator::useBootstrap();

        View::composer('*', function ($view) {

            /* ================== BASIC SETTINGS ================== */
            $view->with('setting', DB::table('settings')->find(1));
            $view->with('extra_settings', DB::table('extra_settings')->find(1));
            $view->with('menus', DB::table('menus')->find(1));

            /* ================== WISHLIST ================== */
            $wishlists = auth()->check()
                ? cache()->remember(
                    'wishlist_' . Auth::id(),
                    300,
                    fn() => Wishlist::whereUserId(Auth::id())
                        ->pluck('item_id')
                        ->flip()
                )
                : collect();

            $view->with('wishlists', $wishlists);

            /* ================== 🔥 MEGA MENU (ULTRA FAST) ================== */
            $categories = Cache::remember('mega_menu_fast', 3600, function () {

                return Category::with([
                    'subcategory:id,category_id,name,slug',
                    'items' => function ($q) {
                        $q->select('id', 'category_id', 'discount_price')
                            ->where('status', 1)
                            ->with([
                                'itemVariants.variant.color:id,name',
                                'itemVariants.variant.size:id,name',
                            ]);
                    }
                ])->get()->map(function ($category) {

                    $products = $category->items;

                    $category->colors = $products
                        ->flatMap(fn($p) => $p->itemVariants->pluck('variant.color.name'))
                        ->filter()
                        ->unique()
                        ->values();

                    $category->sizes = $products
                        ->flatMap(fn($p) => $p->itemVariants->pluck('variant.size.name'))
                        ->filter()
                        ->unique()
                        ->values();

                    $category->prices = $products
                        ->flatMap(
                            fn($p) =>
                            $p->itemVariants->map(
                                fn($v) => $p->discount_price + ($v->additional_price ?? 0)
                            )
                        )
                        ->filter()
                        ->unique()
                        ->sort()
                        ->values();

                    unset($category->items); // memory free

                    return $category;
                });
            });

            $view->with('categories', $categories);

            /* ================== POPUP ================== */
            if (!session()->has('popup')) {
                $view->with('visit', 1);
                session()->put('popup', 1);
            }
        });
    }


    public function register()
    {
    }
}