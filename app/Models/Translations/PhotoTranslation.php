<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Photo;

class PhotoTranslation extends Model
{
    protected $baseModuleModel = Photo::class;
}
