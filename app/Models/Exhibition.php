<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\ExhibitionRepository;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class Exhibition extends Model implements Sortable, LocalizedUrlRoutable
{
    use HasTranslation, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'optional',
        'location',
        'year',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'optional',
        'location',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'photos' => [
            'default' => [
                [
                    'name' => 'default',
                ],
            ],
        ],
    ];

    public function resolveRouteBinding($slug, $field = null)
    {
        $exhibition = app(ExhibitionRepository::class)->forSlug($slug);

        abort_if(! $exhibition, 404);

        return $exhibition;
    }

    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }
}
