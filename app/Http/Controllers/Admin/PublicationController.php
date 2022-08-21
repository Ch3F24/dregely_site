<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PublicationController extends BaseModuleController
{
    protected $moduleName = 'publications';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
