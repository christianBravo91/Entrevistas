<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

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
        Validator::extend('tipoDeUsuario', function ($attribute, $value, $parameters, $validator) {
            
            if(($value=='Aplicante')or($value=='Examinador') ){
            
            return $value == 'tipoDeUsuario';}
        });
    }
}
