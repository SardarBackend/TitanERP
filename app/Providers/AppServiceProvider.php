<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
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
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en', 'fa'])
                ->visible(true)
                ->outsidePanelRoutes(['profile', 'home'])
                ->flags([
                    'fa' => asset('flags/iran.png'),
                    'en' => asset('flags/british.png'),
                ])
                ->flagsOnly()
                ->circular();
        });
    }
}
