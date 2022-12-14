<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use Illuminate\Support\Facades\Cache;
use Spatie\ResponseCache\Facades\ResponseCache;

class LexiconController extends BaseModuleController
{
    protected $moduleName = 'lexicons';

//    protected $defaultOrders = ['id' => 'desc'];

    protected $indexOptions = [
        'permalink' => false,
        'reorder' => true,
    ];

    public function reorder()
    {
        Cache::flush();
        ResponseCache::clear();
        return parent::reorder(); // TODO: Change the autogenerated stub
    }
}
