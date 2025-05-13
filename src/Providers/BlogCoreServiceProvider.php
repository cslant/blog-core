<?php

namespace CSlant\Blog\Core\Providers;

use Illuminate\Support\ServiceProvider;

class BlogCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerAssetLoading();

        $this->registerAssetPublishing();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerConfigs();

        $this->registerCommands();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return null|array<string>
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
            \CSlant\Blog\Core\Commands\ListProvidersCommand::class,
            \CSlant\Blog\Core\Commands\CheckSqlModeCommand::class,
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

    /**
     * @return void
     */
    protected function registerAssetLoading(): void
    {
        $routePath = __DIR__.'/../../routes/blog-core.php';
        if (file_exists($routePath)) {
            $this->loadRoutesFrom($routePath);
        }

        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'blog-core');
    }

    /**
     * Register configs.
     *
     * @return void
     */
    protected function registerConfigs(): void
    {
        $configDir = __DIR__.'/../../config';
        $files = scandir($configDir);

        if ($files === false) {
            return;
        }

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $configName = pathinfo($file, PATHINFO_FILENAME);
                $configPath = $configDir.'/'.$file;

                if (file_exists(config_path($configName.'.php'))) {
                    config()->set($configName, array_merge(
                        is_array(config($configName)) ? config($configName) : [],
                        require $configPath
                    ));
                } else {
                    $this->mergeConfigFrom($configPath, $configName);
                }
            }
        }
    }
}
