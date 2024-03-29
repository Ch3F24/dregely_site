<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorksCollection;
use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return WorksCollection::collection(
            Work::doesntHave('child')->published()->whereHas('slugs', function ($query) {
            $query->whereActive(true);
            $query->whereLocale(App::getLocale());
            })->orderBy('position')->get()
        );
    }

    public function parent($slug)
    {
        return WorksCollection::collection($this->repository->forSlug($slug)->child->sortBy('position'));
    }
}
