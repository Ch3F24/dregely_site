<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LexiconCollection;
use App\Models\Lexicon;
use App\Repositories\LexiconRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LexiconController extends Controller
{
    public function index()
    {
//        $lexicon = app(LexiconRepository::class)->all()->where('published')->sortBy('position');

        return LexiconCollection::collection(
            Lexicon::query()->published()->whereHas('translations', function ($query) {
                $query->whereActive(true);
                $query->whereLocale(App::getLocale());
            })->orderBy('position')->get()
        );
    }
}
