<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('age', '100');

        View::composer(['les3.asd'], function ($view) {
            $view->with('age', 250);
        });        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Counter', function ($app) {
            return new \App\Implementation\Counter();
        });

        $this->app->singelton('Counter', function ($app) {
            return new \App\Implementation\Counter();
        });

        $this->app->bind(
            'App\Interfaces\CounterInterface',
            'App\Implementations\Counter'
        );
    }
}