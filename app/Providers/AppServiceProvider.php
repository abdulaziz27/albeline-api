<?php

namespace App\Providers;

use App\Http\Resources\ListCollection;
use App\Http\Resources\ListResource;
use App\Http\Resources\ProductByCategoryCollection;
use App\Http\Resources\ProductByCategoryResources;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ListResource::withoutWrapping();
        ListCollection::withoutWrapping();
        ProductByCategoryResources::withoutWrapping();
        ProductByCategoryCollection::withoutWrapping();
    }
}
