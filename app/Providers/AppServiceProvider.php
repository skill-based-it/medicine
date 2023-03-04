<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;
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
        View::composer('*',function($view){
            $view->with('pages',DB::table('pages')->where('status',1)->get());
            $view->with('websettings',DB::table('settings')->where('id',1)->first());
            $view->with('cat_first',DB::table('categories')->where('status',1)->take(7)->get());
            $view->with('cat_second',DB::table('categories')->where('status',1)->skip(7)->take(14)->get());
        });
    }
}
