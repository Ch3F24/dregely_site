<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\WorkRepository;

class Work extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'meta_description',
        'position',
        'parent_work_id',
        'date'
    ];

    public $translatedAttributes = [
        'title',
        'meta_description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function resolveRouteBinding($slug, $field = null)
    {
        $work = app(WorkRepository::class)->forSlug($slug);

        abort_if(! $work, 404);

        return $work;
    }

    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
