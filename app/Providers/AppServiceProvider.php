<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Settings;
use App\Models\Brand;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.layouts.main', function ($view) {
            $numbers = [
                Settings::where('key', 'number_1')->first(),
                Settings::where('key', 'number_2')->first(),
                Settings::where('key', 'number_3')->first(),
            ];
            $number = $numbers[mt_rand(0, 2)];
            $brands = Brand::orderBy('sort')->get();

            $view->with('number', $number);
            $view->with('numbers', $numbers);
            $view->with('brands', $brands);
            $view->with('instagram', Settings::where('key', 'instagram')->first());
            $view->with('youtube', Settings::where('key', 'youtube')->first());
            $view->with('telegram', Settings::where('key', 'telegram')->first());
        });
    }
}
