<?php

namespace App\Providers;

use App\Repositories\WorkRepository;
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
        $works = app(WorkRepository::class)->all();

        view()->share(['works' => $works]);
    }
}
