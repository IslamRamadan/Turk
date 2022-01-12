<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use App\Models\ClientNotification;
use App\Models\Setting;
use App\Models\SubCategory;

//use App\Models\Service;

//use App\Models\Owner;

//use App\Models\Statistic;



use App\Models\Category;

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
      Schema::defaultStringLength(191);

      ///////////////////////////////////////////////
       $my_setting= Setting::first();
        view()->share(compact('my_setting'));
        ///////////////////////////////////////////////
        $my_sevices= Service::where('type',1)->get();
        view()->share(compact('my_sevices'));

        $my_projects= Service::where('type',2)->get();
        view()->share(compact('my_projects'));

        $my_plans= Service::where('type',3)->get();
        view()->share(compact('my_plans'));
    }
}
