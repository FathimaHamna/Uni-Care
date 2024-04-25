<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//cj
use Illuminate\Support\Facades\Schema;

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
        //cj
        Schema::defaultstringLength(191);
    }
}
