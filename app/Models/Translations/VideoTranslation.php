<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Video;

class VideoTranslation extends Model
{
    protected $baseModuleModel = Video::class;
}
