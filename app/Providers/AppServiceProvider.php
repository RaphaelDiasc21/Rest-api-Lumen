<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CrudInterface;
use App\Repositories\CarRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Interfaces\CrudInterface::class,\App\Repositories\CarRepository::class);
    }
}
