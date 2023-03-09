<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\InstallationRepository;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;


class Installation extends Model implements Sortable, LocalizedUrlRoutable
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
        $installation = app(InstallationRepository::class)->forSlug($slug);

        abort_if(! $installation, 404);

        return $installation;
    }

    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }
}
