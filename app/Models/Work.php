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
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class Work extends Model implements Sortable,LocalizedUrlRoutable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'meta_description',
        'keywords',
        'position',
        'parent_work_id',
        'year',
        'reference_number',
        'description'
    ];

    public $translatedAttributes = [
        'title',
        'meta_description',
        'keywords',
        'description',
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

    public function child()
    {
        return $this->hasMany(Work::class,'parent_work_id','id')->orderBy('position');
    }
    public function parent()
    {
        return $this->hasOne(Work::class,'id','parent_work_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class)->where('published',1);
    }

    public function scopeForSlug($query, $slug)
    {
        return $query->whereHas('slugs', function ($query) use ($slug) {
            $query->whereSlug($slug);
            $query->whereActive(true);
            $query->whereLocale(app()->getLocale());
        })->with(['slugs']);
    }
}
