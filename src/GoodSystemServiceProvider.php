<?php
namespace GoodSystem;

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
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Make sure \User is available for laravel-o365auth to use.
        if (! class_exists('\User')) {
            AliasLoader::getInstance()->alias('User', '\GoodSystem\User');
        }
    }
}