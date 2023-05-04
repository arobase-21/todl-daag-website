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
        view()->share('companyServices', [
            'formation' => [
                'title' => 'Formations et Accompagnement',
                'description' => 'Formations et Accompagnement',
//                'url' => route('service-details', ['service' => 'formation']),
                'url' => 'services/formation',
                'image' => asset('demos/pet/images/services/4.png'),
            ],
            'courtage' => [
                'title' => 'Courtage Agricole',
                'description' => 'Courtage Agricole',
//                'url' => route('service-details', ['service' => 'courtage']),
                'url' => 'services/courtage',
                'image' => asset('demos/pet/images/services/1.png'),
            ],
            'conseil' => [
                'title' => 'Conseils Agricoles',
                'description' => 'Conseils Agricoles',
//                'url' => route('service-details', ['service' => 'conseil']),
                'url' => 'services/conseil',
                'image' => asset('demos/pet/images/services/2.png'),
            ],
            'builder' => [
                'title' => 'Builder',
                'description' => 'Builder',
//                'url' => route('service-details', ['service' => 'builder']),
                'url' => 'services/builder',
                'image' => asset('demos/pet/images/services/3.png'),
            ]
        ]);
    }
}
