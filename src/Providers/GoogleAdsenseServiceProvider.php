<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-09-02 15:35:03
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\GoogleAdsense\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Webkul\Shop\Http\Middleware\AuthenticateCustomer;
use Webkul\Shop\Http\Middleware\Currency;
use Webkul\Shop\Http\Middleware\Locale;
use Webkul\Shop\Http\Middleware\Theme;

class GoogleAdsenseServiceProvider extends ServiceProvider
{
    private $version = null;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        Route::middleware('web')->group(__DIR__ . '/../Routes/web.php');
        Route::middleware('api')->group(__DIR__ . '/../Routes/api.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'GoogleAdsense');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'GoogleAdsense');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        

        /*
        $this->app->register(EventServiceProvider::class);
        */

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../Resources/views' => $this->app->resourcePath('themes/default/views'),
            ], 'GoogleAdsense');

            // Publish config files
            $this->publishes([
                dirname(__DIR__) . '/Config/GoogleAdsense.php' => config_path('GoogleAdsense.php')
            ], 'GoogleAdsense');
        }

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php',
            'acl'
        );

        
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/GoogleAdsense.php', 'GoogleAdsense'
        );

        // api docs
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/l5-swagger.php', 'l5-swagger.documentations'
        );
        
    }

    /**
     * Register the console commands of this package.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \NexaMerchant\GoogleAdsense\Console\Commands\Install::class,
                \NexaMerchant\GoogleAdsense\Console\Commands\UnInstall::class,
            ]);
        }
    }
}
