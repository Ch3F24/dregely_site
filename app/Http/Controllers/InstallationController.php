<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExhibitionsResource;
use App\Models\Installation;
use Illuminate\Http\Request;

class InstallationController extends Controller
{
    public function view(Installation $installation)
    {
        return view('site.pages.slider')->with([
            'data' => $installation,
            'route' => route('api.installation.view',$installation->id),
            'thumb' => 0,
            'isExhibition' => true,
            'slides' => 1,
            'isImage' => 1,
            'dots' => true,
            'isVideo' => 0
        ]);
    }

    public function photos(Request $request)
    {
        $installation = Installation::query()->findOrFail($request->id);

        return new ExhibitionsResource($installation);
    }
}
