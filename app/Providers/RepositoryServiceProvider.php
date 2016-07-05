<?php

namespace h2o\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('h2o\Repositories\UserRepository',
            'h2o\Repositories\UserRepositoryEloquent');

        $this->app->bind('h2o\Repositories\ContatoRepository',
            'h2o\Repositories\ContatoRepositoryEloquent');
    }
}

