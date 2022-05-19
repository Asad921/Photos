<?php

namespace Photos;

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
        $this->app->bind('Photos',function() {
            return new \Photos\Facades\Photos;
         });
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
