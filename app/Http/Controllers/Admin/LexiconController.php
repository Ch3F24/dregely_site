<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class LexiconController extends BaseModuleController
{
    protected $moduleName = 'lexicons';

    protected $defaultOrders = ['id' => 'desc'];

    protected $indexOptions = [
        'permalink' => false,
    ];
}