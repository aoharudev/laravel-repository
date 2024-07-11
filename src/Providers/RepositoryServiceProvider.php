<?php

namespace Aoharudev\LaravelRepository\Providers;

use Aoharudev\LaravelRepository\Commands\CreateRepositoryCommand;
use Aoharudev\LaravelRepository\Repository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('aoharudev-laravel-repository', function ($app) {
            return new Repository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->commands([
            CreateRepositoryCommand::class
        ]);
    }
}