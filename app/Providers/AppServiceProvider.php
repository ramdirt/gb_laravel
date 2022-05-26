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
        $this->app->bind(QueryBuilder::class, QueryBuilderCategories::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderNews::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderOrders::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderFeedback::class);
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