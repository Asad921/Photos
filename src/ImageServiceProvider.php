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
        $this->app->make('Photos\ImageController');
        $this->app->make('Photos\File');
        $this->app->bind('Photos',function() {
            return new \Photos\Facades\Image;
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
       $this->loadMigrationsFrom(__DIR__.'/Database');
    }
}
