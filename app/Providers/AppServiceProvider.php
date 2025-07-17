<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\SiteSetting;  // Laravel 6 मा Models फरक folder मा छैन, app/ मा हुन्छ

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
        // सबै सेटिङ key=>value मा ल्याउने
        $globalSettings = SiteSetting::pluck('value', 'key')->toArray();

        // सबै views मा $globalSettings share गर्ने
        View::share('globalSettings', $globalSettings);
    }
}
