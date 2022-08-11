<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Work;

class WorkRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleTags;

    public function __construct(Work $model)
    {
        $this->model = $model;
    }
}
