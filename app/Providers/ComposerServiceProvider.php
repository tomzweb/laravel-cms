<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationComposer;
use App\Http\ViewComposers\SidebarComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'partials.navigation', NavigationComposer::class
        );

        View::composer(
            'partials.sidebar', SidebarComposer::class
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
