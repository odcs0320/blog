<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->share('global', 'My Gallery');
        view()->composer(['senkawa_chihiro'], function ($view) {
            $view->with('name1', '千川千尋');
        });
        view()->composer(['black_haired_girl'], function ($view) {
            $view->with('name2', '旗袍女子');
        });
        view()->composer(['ol_chan'], function ($view) {
            $view->with('name3', 'OL醬');
        });

    }
}
