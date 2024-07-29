<?php

namespace CSlant\Blog\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Matchish\ScoutElasticSearch\ElasticSearchServiceProvider as ScoutElasticSearchServiceProvider;

class ElasticSearchServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->register(ScoutElasticSearchServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Optional: Code to boot your package services
    }
}
