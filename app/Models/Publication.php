<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Publication extends Model implements Sortable
{
    use HasTranslation, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'year'
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $filesParams = ['pdf'];

}
