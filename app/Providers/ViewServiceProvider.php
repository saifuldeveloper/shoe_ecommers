<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front.inc.header', function ($view) {
            $categories = Category::with('subcategory')
            ->where('is_in_menu', 1)
            ->where('status', 1)
            ->orderBy('menu_serial', 'asc')
            ->get();
            $view->with('categories', $categories);
        });
    }
}
