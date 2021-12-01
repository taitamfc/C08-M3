<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\ProfileComposer;

use Illuminate\Support\Facades\Gate;

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

    public function registerPolicies(){

    }

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('xem-trang-vietnam', function ($user) {
          if ($user->country_id == 1) {
              return true;
          }
          return false;
        });

        Gate::define('xem-trang-us', function ($user) {
          if ($user->country_id == 2) {
              return true;
          }
          return false;
        });

        View::share('user_name','Nguyen Van A');

        View::composer(
            '*',
            ProfileComposer::class
        );
    }
}
