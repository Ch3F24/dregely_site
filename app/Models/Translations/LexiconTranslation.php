<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Lexicon;

class LexiconTranslation extends Model
{
    protected $baseModuleModel = Lexicon::class;
}
