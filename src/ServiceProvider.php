<?php

namespace ISaadSalman\StatamicAutoreply;


use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use ISaadSalman\StatamicAutoreply\Http\Middleware\Autoreply;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php'
    ];


    protected $scripts = [
        __DIR__ . '/../dist/js/statamic-autoreply.js'

    ];


    // listener for the event
    protected $listen = [
        'Statamic\Events\FormSubmitted' => [
            'ISaadSalman\StatamicAutoreply\Listeners\SendAutoreply',
        ],

    ];



    protected $middlewareGroups = [
        'web' => [
            Autoreply::class
        ],
    ];

    

    public function boot()
    {
        parent::boot();

        $this->createNavigation();

        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'statamic-autoreply');
        $this->mergeConfigFrom(__DIR__ . '/../config/statamic-autoreply.php', 'statamic-autoreply');
        $this->publishAssets();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/statamic-autoreply.php' => config_path('statamic-autoreply.php'),
            ], 'statamic-autoreply-config');
        }   
    }


    private function createNavigation(): void
    {


        // Nav::extend(function ($nav) {
        //     $nav->create('Autoreply')
        //         ->icon('charts')
        //         ->section('Tools')
        //         ->route('statamic-autoreply.index');
        // });
    }

    private function publishAssets(): void
    {
        Statamic::afterInstalled(function () {
            Artisan::call('vendor:publish --tag=statamic-autoreply-config');
        });
    }


}
