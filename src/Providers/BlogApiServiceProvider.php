<?php

namespace CSlant\BlogApi\Providers;

use Illuminate\Support\ServiceProvider;

class BlogApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $routePath = __DIR__.'/../../routes/blog-core.php';
        if (file_exists($routePath)) {
            $this->loadRoutesFrom($routePath);
        }

        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'blog-core');

        $this->registerCommands();

        $this->registerAssetPublishing();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $configPath = __DIR__.'/../../config/blog-core.php';
        $this->mergeConfigFrom($configPath, 'blog-core');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>|null
     */
    public function provides(): ?array
    {
        return ['blog-core'];
    }

    /**
     * @return void
     */
    protected function registerCommands(): void
    {
        $this->commands([
            //
        ]);
    }

    /**
     * @return void
     */
    protected function registerAssetPublishing(): void
    {
        $configPath = __DIR__.'/../../config/blog-core.php';
        $this->publishes([
            $configPath => config_path('blog-core.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../../lang' => resource_path('lang/packages/blog-core'),
        ], 'lang');
    }
}
