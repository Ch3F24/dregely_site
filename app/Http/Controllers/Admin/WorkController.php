<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\WorkRepository;

class WorkController extends BaseModuleController
{
    protected $moduleName = 'works';

    protected $defaultOrders = ['id' => 'desc'];

    protected function formData($request)
    {
        $works = app(WorkRepository::class)->listAll('title',[],$request->route('work'));
        $works->prepend('Kérem válasszon','0');

        return [
          'works' => $works
        ];
    }

    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'reference_number' => [
            'title' => 'Referenciaszám',
            'field' => 'reference_number',
        ],
    ];
}
