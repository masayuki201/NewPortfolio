<?php

namespace App\Providers;

use App\Services\ListService;
use App\Services\ListServiceInterface;
use App\Services\PickupService;
use App\Services\PickupServiceInterface;
use App\Services\RankingService;
use App\Services\RankingServiceInterface;
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
        $this->app->bind(
            ListServiceInterface::class, ListService::class,
        );
        $this->app->bind(
            PickupServiceInterface::class, PickupService::class,
        );
        $this->app->bind(
            RankingServiceInterface::class, RankingService::class,
        );
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
