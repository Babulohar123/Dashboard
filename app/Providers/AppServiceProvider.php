<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\SiteSetting;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $globalSettings = [];

        // 🛑 Skip DB if running artisan command
        if ($this->app->runningInConsole()) {
            View::share('globalSettings', $globalSettings);
            return;
        }

        // ✅ Safe DB check
        try {
            if (Schema::hasTable('site_settings')) {
                $globalSettings = SiteSetting::pluck('value', 'key')->toArray();
            }
        } catch (\Exception $e) {
            // 🛡️ Ignore DB errors
        }

        View::share('globalSettings', $globalSettings);
    }

    public function register()
    {
        //
    }
}
