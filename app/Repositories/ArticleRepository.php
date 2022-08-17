<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Article;

class ArticleRepository extends ModuleRepository
{
    use HandleTranslations, HandleFiles;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }
}
