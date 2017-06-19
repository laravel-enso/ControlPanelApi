<?php

namespace LaravelEnso\StatisticsManager;

use Illuminate\Support\ServiceProvider;

class StatisticsManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'statistics-migration');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //for passport oauth client_credentials type of authorization
        $this->app['router']->aliasMiddleware('passport', \Laravel\Passport\Http\Middleware\CheckClientCredentials::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
