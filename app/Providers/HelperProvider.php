<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path('Includes/helpers.php');
    }
}
