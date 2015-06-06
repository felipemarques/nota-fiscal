<?php

namespace Laraerp\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class NotaFiscalServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $back = DIRECTORY_SEPARATOR . '..';
        $database = __DIR__ . $back . $back . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR;

        $this->publishes([
            $database . 'migrations' => base_path('database/migrations')
        ]);

        include __DIR__ . '/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        /*
         * Laraerp
         */
        $this->app->register('Laraerp\Providers\NcmsServiceProvider');
        $this->app->register('Laraerp\Providers\CfopsServiceProvider');

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

}
