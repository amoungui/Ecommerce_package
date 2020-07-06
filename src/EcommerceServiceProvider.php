<?php
namespace Scaffolder\Ecommerce;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider{
    public function boot(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'/views', 'ecommerce');
        //define the path for the migrations files
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        //defined the file which are going to be published
        $this->publishes([
            __DIR__.'/views' => resource_path('views/ecommerce'),
        ]);        
    }

    public function register(){

    }
}