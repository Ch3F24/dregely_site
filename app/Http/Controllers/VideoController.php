<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoResource;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function view(Video $video)
    {
        return view('site.pages.slider')->with([
            'data' => $video,
            'route' => route('api.video.view',$video->id),
            'isExhibition' => 0,
            'slides' => 1,
            'isImage' => 0,
            'dots' => true,
            'thumb' => 0,
            'isVideo' => true
        ]);
    }

    public function videos(Request $request)
    {
        $video = Video::query()->findOrFail($request->id);

        return new VideoResource($video);
    }
}
