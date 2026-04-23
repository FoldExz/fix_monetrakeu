<?php

namespace App\Providers;
// app/Providers/AppServiceProvider.php
use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot()
    {
        // Force URL root agar sesuai dengan APP_URL di .env (Penting untuk subfolder hosting)
        if (config('app.url')) {
            \Illuminate\Support\Facades\URL::forceRootUrl(config('app.url'));
        }

        // Jika menggunakan HTTPS, paksa skema HTTPS
        if (str_contains(config('app.url'), 'https://')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        view()->composer('*', function ($view) {
            $tahunSekarang = Carbon::now()->year;
            $tahunRange = range(2013, $tahunSekarang + 3);

            $view->with(compact('tahunRange', 'tahunSekarang'));
        });
    }
}
