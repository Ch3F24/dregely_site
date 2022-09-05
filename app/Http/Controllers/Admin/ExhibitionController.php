<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ExhibitionController extends BaseModuleController
{
    protected $moduleName = 'exhibitions';

    protected $defaultOrders = ['id' => 'desc'];

}
