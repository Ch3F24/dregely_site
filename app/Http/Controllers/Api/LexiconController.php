<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LexiconCollection;
use App\Repositories\LexiconRepository;
use Illuminate\Http\Request;

class LexiconController extends Controller
{
    public function index()
    {
        $lexicon = app(LexiconRepository::class)->all()->where('published')->sortByDesc('id');

        return LexiconCollection::collection($lexicon);
    }
}
