<?php

namespace App\Providers;

use Illuminate\{
    Support\ServiceProvider,
    Support\Facades\DB
};
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Wishlist;
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

    public function boot(): void
    {
        Paginator::useBootstrap();

        View::composer('*', function ($view) {

            // Settings (single call, OK)
            $view->with('setting', DB::table('settings')->find(1));
            $view->with('extra_settings', DB::table('extra_settings')->find(1));
            $view->with('menus', DB::table('menus')->find(1));

            // 🔥 Wishlist (FAST + SAFE)
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

            // Popup logic (cleaned)
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