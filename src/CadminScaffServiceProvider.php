<?php

namespace AndreassBayu\CadminScaff;

use CadminScaff\Generator\Commands\ScaffPublisherCommand;
use Illuminate\Support\ServiceProvider;

class CadminScaffServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('scaff.publish.route', function ($app) {
            return new ScaffPublisherCommand();
        });

        $this->commands([
            'scaff.publish.route',
        ]);
    }
}
