<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StockCheckerInterface::class, function ($app) {
            switch ($app->make('config')->get('services.stock-checker')) {
                case 'database':
                    return new DatabaseStockCheckAdapter;
                case 'erp':
                    return new ErpStockCheckAdapter;
                default:
                    throw new \RuntimeException("Unknown Stock Checker Service");
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
