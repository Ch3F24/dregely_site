<?php

namespace App\Providers;

use A17\Twill\Repositories\SettingRepository;
use App\Models\Work;
use App\Repositories\ExhibitionRepository;
use App\Repositories\InstallationRepository;
use App\Repositories\PageRepository;
use App\Repositories\VideoRepository;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
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
        $exhibitions = [];
        $works = [];
        $pages = [];
        $installations = [];
        $videos = [];
        $site_keywords = '';
        $site_description = '';

        if (Schema::hasTable('works')) {
            $works = Cache::remember('works',CarbonInterval::week(),function () {
                return Work::query()->published()->doesntHave('parent')->orderBy('position')->get();
            });
        }

        if (Schema::hasTable('pages')) {
            $pages = Cache::remember('pages',CarbonInterval::week(),function () {
                return app(PageRepository::class)->all()->where('published');
            });
        }

        if (Schema::hasTable('exhibitions')) {
            $exhibitions = Cache::remember('exhibitions',CarbonInterval::week(),function () {
               return  app(ExhibitionRepository::class)->all()->where('published')->sortBy('position');
            });
        }

        if (Schema::hasTable('installations')) {
            $installations = Cache::remember('installation',CarbonInterval::week(),function () {
                return app(InstallationRepository::class)->all()->where('published')->sortBy('position');
            });
        }

        if (Schema::hasTable('videos')) {
            $videos = Cache::remember('videos',CarbonInterval::week(),function () {
                return app(VideoRepository::class)->all()->where('published')->sortBy('position');
            });
        }
        if (Schema::hasTable('settings')) {
            $site_keywords = app(SettingRepository::class)->byKey('keywords');
            $site_description = app(SettingRepository::class)->byKey('meta_description');
        }

        view()->share([
            'works_menu' => $works,
            'pages' => $pages,
            'exhibitions' => $exhibitions,
            'installations' => $installations,
            'videos' => $videos,
            'site_keywords' => $site_keywords,
            'site_description' => $site_description
        ]);
    }
}
