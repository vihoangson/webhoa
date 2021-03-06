<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            '*', 'App\Http\ViewComposers\ProfileComposer'
        );

        // Using class based composers...
        View::composer(
            '*', 'App\Http\ViewComposers\MenuComposer'
        );
        // Using class based composers...
        View::composer(
            '*', 'App\Http\ViewComposers\MetaHeaderComposer'
        );

        // Using class based composers...
        View::composer(
            '*', 'App\Http\ViewComposers\WidgetComposer'
        );

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}