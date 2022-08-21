<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Contact extends Model
{
    use HasTranslation, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'contact_information',
    ];

    public $translatedAttributes = [
        'title',
        'contact_information',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

}
