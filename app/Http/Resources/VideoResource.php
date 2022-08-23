<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//            $photos = $this->resource->file('video');
//            $cover = [
//                'default' => $this->resource->image('cover','default',['h'=> 320,'q' => 60]),
//                '1x' => $this->resource->image('cover','default',['h'=> 320, 'dpr' => 1,'q' => 60]),
//                '2x' => $this->resource->image('cover','default',['h'=> 320, 'dpr' => 2,'q' => 60]),
//            ];
//        }
        return [
            'title' => $this->title,
            'optional' => $this->optional,
            'location' => $this->location,
            'year' => $this->year,
            'photos' => $this->resource->filesList('videos')
        ];
    }
}
