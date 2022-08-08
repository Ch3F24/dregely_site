<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @property PageRepository $repository
 */
class PageController extends BaseController
{

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function view(Page $page)
    {
//        $page = $this->repository->forSlug($slug);

        return view('site.pages.view',compact('page'));
    }
}
