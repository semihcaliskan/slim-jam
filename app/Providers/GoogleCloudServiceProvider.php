<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Google\Cloud\Translate\V2\TranslateClient;

class GoogleCloudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(TranslateClient::class, function($app){

        return new TranslateClient([
            'key' => config('services.googlecloud.translation_api_key'),
            'target' => config('services.googlecloud.default_target'),
        ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
