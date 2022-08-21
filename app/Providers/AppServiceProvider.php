<?php

namespace App\Providers;

use App\Repositories\ExhibitionRepository;
use App\Repositories\PageRepository;
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
        $works = app(WorkRepository::class)->all()->where('published');
        $pages = app(PageRepository::class)->all()->where('published');
        $exhibitions = app(ExhibitionRepository::class)->all()->where('published');
//        dd($exhibitions);

        view()->share(['works' => $works,'pages' => $pages,'exhibitions' => $exhibitions]);
    }
}
