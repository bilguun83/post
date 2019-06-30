<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//migrate hiihed string tei ued aldaa zaaj baigaa bolhoor ene code bichiv
use Illuminate\Support\Facades\Schema;
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
        //migrate hiihed string tei ued aldaa zaaj baigaa bolhoor ene code bichiv
        Schema::defaultstringlength('191');
    }
}
