<?php

namespace WisdmLabs\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('WisdmLabs\Todolist\Controllers\TaskController');
       /* $this->app->bind('taskaction' , function(){
            return new \WisdmLabs\Todolist\Controllers\TaskController;
        });*/
        $this->app->bind('taskaction' , 'WisdmLabs\Todolist\Controllers\TaskController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([
            __DIR__.'/views' => resource_path('/views/wisdmlabs/todolist'),
        ]);
    }
}
