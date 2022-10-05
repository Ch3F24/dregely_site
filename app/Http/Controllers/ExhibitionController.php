<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExhibitionsCollection;
use App\Http\Resources\ExhibitionsResource;
use App\Models\Exhibition;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function view(Exhibition $exhibition)
    {
        return view('site.pages.slider')->with([
            'data' => $exhibition,
            'route' => route('api.exhibition.view',$exhibition->id),
            'thumb' => 0,
            'isExhibition' => true,
            'slides' => 1,
            'isImage' => 1,
            'dots' => 0,
            'isVideo' => 0

        ]);
    }

    public function photos(Request $request)
    {
        $exhibition = Exhibition::query()->findOrFail($request->id);

        return new ExhibitionsResource($exhibition);
    }
}
