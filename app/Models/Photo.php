<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Photo extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'meta_description',
        'print',
        'edition_number',
        'size',
        'date',
        'position',
        'work_id',
    ];

    public $translatedAttributes = [
        'title',
        'print',
        'active',
        'meta_description'
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'photos' => [
            'default' => [
                [
                    'name' => 'default',
//                    'ratio' => 16 / 9,
                ],
            ],
        ],
    ];
    public function imageAsArray($role, $crop = "default", $params = [], $media = null)
    {
        if (!$media) {
            $media = $this->findMedia($role, $crop);
        }

        if ($media) {
            return [
                'src' => $this->image($role, $crop, $params, false, false, $media),
                'width' => $media->pivot->crop_w ?? $media->width,
                'height' => $media->pivot->crop_h ?? $media->height,
                'alt' => $this->imageAltText($role, $media),
                'caption' => $this->imageCaption($role, $media),
                'video' => $this->imageVideo($role, $media),
                'landscape' => $media->getMetadata('landscape')
            ];
        }

        return [];
    }
}
