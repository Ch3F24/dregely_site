<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Lexicon;

class LexiconRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Lexicon $model)
    {
        $this->model = $model;
    }
}
