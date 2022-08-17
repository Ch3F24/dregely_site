<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoCollection;
use App\Http\Resources\WorksCollection;
use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkController extends Controller
{
    protected WorkRepository $repository;

    public function __construct(WorkRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
//        return WorksCollection::collection($this->repository->all());
//        dd(Work::query()->with('medias')->get());
        return Inertia::render(
            'Gallery/Index',[
                'works' => WorksCollection::collection($this->repository->all())
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function show($slug)
    {
        $work = $this->repository->forSlug($slug);
        return Inertia::render(
            'Gallery/View',[
                'photos' => PhotoCollection::collection($work->photos->where('published')),
                'work' => $work->only('title')
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function nav()
    {
        return WorksCollection::collection($this->repository->all());
    }
}
