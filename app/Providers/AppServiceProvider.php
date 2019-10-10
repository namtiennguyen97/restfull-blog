<?php

namespace App\Providers;

use App\Http\Repositories\BlogRepositories;
use App\Http\Repositories\Impl\BlogRepositoryImpl;
use App\Http\Servies\BlogService;
use App\Http\Servies\Impl\BlogServiceImpl;
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
        $this->app->singleton(
            BlogRepositories::class,
            BlogRepositoryImpl::class
        );
        $this->app->singleton(
            BlogService::class,
            BlogServiceImpl::class
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
