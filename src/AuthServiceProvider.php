<?php

namespace Awcodes\Auth;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            return view('auth::login');
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth::forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth::reset-password', ['request' => $request]);
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/auth'),
            ], 'views');

            $this->publishes([
                __DIR__ . '/../resources/css' => public_path('vendor/auth/css'),
            ], 'auth-assets');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'auth');
    }

    public function register()
    {
    }
}
