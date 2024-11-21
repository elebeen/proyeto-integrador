<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Exceptions\Handler;

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
        // Blade::component('bubble-background', Components\BubbleBackground::class);
        $this->app->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            Handler::class
        );
    }
}
