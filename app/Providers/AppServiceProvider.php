<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Configration;
use DB;
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
        try {
            DB::connection()->getPdo();
            $configration = Configration::find(1);
             View::share('configration',$configration );

        }
         catch (\Exception $e) {
          //  die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }

        Schema::defaultStringLength(191); //NEW: Increase StringLength

        Validator::extend('white_space', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\p{Arabic}\pL\s]+$/u', $value);
        });

        Validator::extend('name_with_number', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\p{Arabic}\pL-_\s\p{N}]+$/u', $value);
        });
    }
}
