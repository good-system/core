<?php
namespace GoodSystem;

use GoodSystem\Models\O365User;
use GoodSystem\ModelHistory\ModelObserver;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class GoodSystemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'good-system');

        $this->registerObservers();
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Make sure \User is available for laravel-o365auth to use.
        if (! class_exists('\O365User')) {
            AliasLoader::getInstance()->alias('O365User', '\GoodSystem\Models\O365User');
        }
    }

    private function registerObservers()
    {
        // For model history recording, there's no need for a new observer, just use the one from laravel-model-history package
        O365User::observe(ModelObserver::class);
    }
}