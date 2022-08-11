<?php

namespace App\Http\Controllers;

use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class WorkController extends BaseController
{

    protected WorkRepository $repository;

    public function __construct(WorkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $works = $this->repository->all();

        return view('site.works.index',compact('works'));
    }
}
