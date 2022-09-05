<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ArticleController extends BaseModuleController
{
    protected $moduleName = 'articles';

    protected $defaultOrders = ['id' => 'desc'];

    protected $indexOptions = [
        'permalink' => false,
    ];
}
