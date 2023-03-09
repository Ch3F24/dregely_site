<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Models\Publication;
use App\Repositories\ArticleRepository;
use App\Repositories\PublicationRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\App;

class PublicationController extends Controller
{

    protected PublicationRepository $repository;

    public function __construct(PublicationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): AnonymousResourceCollection
    {
        return ArticleCollection::collection(
            Publication::query()->published()->whereHas('translations', function ($query) {
                $query->whereActive(true);
                $query->whereLocale(App::getLocale());
            })->orderBy('position')->get()
        );
    }
}
