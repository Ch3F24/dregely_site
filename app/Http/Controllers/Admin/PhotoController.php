<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\WorkRepository;

class PhotoController extends BaseModuleController
{
    protected $moduleName = 'photos';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        return [
          'works' => app(WorkRepository::class)->listAll(),
        ];
    }
}
