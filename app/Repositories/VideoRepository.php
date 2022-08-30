<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Video;
use Illuminate\Support\Facades\Cache;
use Spatie\ResponseCache\Facades\ResponseCache;

class VideoRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleFiles;

    public function __construct(Video $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        Cache::flush();
        ResponseCache::clear();
        parent::afterSave($object, $fields); // TODO: Change the autogenerated stub
    }
}
