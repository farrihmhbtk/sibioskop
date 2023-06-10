<?php

namespace App\Providers;

use App\Models\Lokasi;
use App\Models\HistoryLokasiGuest;
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
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with('temp_lokasi', HistoryLokasiGuest::orderBy('id', 'desc')->first());
        });
    }
}
