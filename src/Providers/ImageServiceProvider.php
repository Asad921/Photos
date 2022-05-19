<?php

namespace Sjsolutionz\Photos;

use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Image\photos\src\Controllers\ImageController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       dd('its work');
    }
}
