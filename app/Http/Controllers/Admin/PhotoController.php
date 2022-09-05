<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\WorkRepository;

class PhotoController extends BaseModuleController
{
    protected $moduleName = 'photos';


    protected function formData($request)
    {
        return [
          'works' => app(WorkRepository::class)->listAll(),
        ];
    }

    protected $perPage = 10;

    // Optional, specify the default listing order
    protected $defaultOrders = ['id' => 'asc'];

    protected $indexColumns = [
        'photos' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'photos',
                'crop' => 'default',
            ],
        ],
        'id' => [
            'title' => 'id',
            'field' => 'id',
        ],
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'reference_number' => [
            'title' => 'Referenciaszám',
            'field' => 'reference_number',
        ],
        'work' => [
            'title' => 'works',
            'sort' => true,
            'relationship' => 'work',
            'field' => 'title'
        ],
    ];
}
