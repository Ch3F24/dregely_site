<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\WorkRepository;

class WorkController extends BaseModuleController
{
    protected $moduleName = 'works';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        $works = app(WorkRepository::class)->listAll('title',[],$request->route('work'));
        $works->prepend('Kérem válasszon');

        return [
          'works' => $works
        ];
    }
}
