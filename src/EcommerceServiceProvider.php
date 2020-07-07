<?php
namespace Scaffolder\Ecommerce;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider{
    public function boot(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ecommerce');
        //define the path for the migrations files
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        //defined the file which are going to be published
        $this->publishes([
            __DIR__.'/views' => resource_path('views/ecommerce'),
            __DIR__.'/database/migrations/2020_07_07_034602_create_products_table.php' => base_path('database/migrations/2020_07_07_034602_create_products_table.php'),
            __DIR__.'/database/seeds/DatabaseSeeder.php' => base_path('database/seeds/DatabaseSeeder.php'),
            __DIR__.'/database/seeds/ProductsTableSeeder.php' => base_path('database/seeds/ProductsTableSeeder.php'),
        ]);        
    }

    public function register(){

    }
}