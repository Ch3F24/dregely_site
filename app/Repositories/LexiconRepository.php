<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Lexicon;
use Illuminate\Support\Facades\Cache;
use Spatie\ResponseCache\Facades\ResponseCache;

class LexiconRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Lexicon $model)
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