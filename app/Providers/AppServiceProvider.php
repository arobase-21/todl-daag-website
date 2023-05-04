<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('companyContacts', [
            'email' => 'contact@todlconsulting.com',
            'phone' => '+(228)93-51-80-32',
        ]);
    }
}
