<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArticleController extends Controller
{

    protected ArticleRepository $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return ArticleCollection::collection(
            Article::query()->published()->whereHas('translations', function ($query) {
                $query->whereActive(true);
                $query->whereLocale(App::getLocale());
            })->orderBy('position')->get()
        );
    }
}
