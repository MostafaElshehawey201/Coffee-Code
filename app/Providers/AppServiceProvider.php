<?php

namespace App\Providers;

use App\Interfaces\Auth\AuthCheckOtpForgetPasswordInterface;
use App\Interfaces\Auth\AuthForgetPasswordInterface;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use App\Interfaces\Auth\AuthResetPasswordInterface;
use App\Interfaces\User\userUpdateProfileInterface;
use App\Repositories\Auth\AuthRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            AuthInterface::class,
            AuthRepository::class,
        );
        $this->app->bind(
            AuthLoginInterface::class,
            AuthRepository::class,
        );
        $this->app->bind(
            AuthForgetPasswordInterface::class,
            AuthRepository::class,
        );
        $this->app->bind(
            AuthCheckOtpForgetPasswordInterface::class,
            AuthRepository::class,
        );
        $this->app->bind(
            AuthResetPasswordInterface::class,
            AuthRepository::class,
        );
        $this->app->bind(
            userUpdateProfileInterface::class,
            UserRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
