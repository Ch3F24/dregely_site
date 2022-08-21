<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Publication;

class PublicationTranslation extends Model
{
    protected $baseModuleModel = Publication::class;
}
