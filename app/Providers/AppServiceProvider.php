<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\ProfileComposer;

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
            \App\Repositories\UserRepository::class,
            \App\Repositories\UserRepositoryImpl::class
        );

        $this->app->singleton(
            \App\Services\UserService::class,
            \App\Services\CustomerServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('user_name','Nguyen Van A');

        View::composer(
            '*',
            ProfileComposer::class
        );
    }
}
