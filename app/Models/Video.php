<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\VideoRepository;

class Video extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasFiles, HasPosition;

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

    public $filesParams = ['videos'];

    public function resolveRouteBinding($slug, $field = null)
    {
        $video = app(VideoRepository::class)->forSlug($slug);

        abort_if(! $video, 404);

        return $video;
    }

    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }
}
