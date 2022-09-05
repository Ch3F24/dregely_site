<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    protected $defaultOrders = ['id' => 'desc'];

    protected $indexOptions = [
        'reorder' => true,
    ];
}
