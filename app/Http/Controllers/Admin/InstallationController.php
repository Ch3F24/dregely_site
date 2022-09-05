<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class InstallationController extends BaseModuleController
{
    protected $moduleName = 'installations';

    protected $defaultOrders = ['id' => 'desc'];

}
