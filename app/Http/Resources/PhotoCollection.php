<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotoCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if($this->resource->hasImage('photos')) {
            $photos = $this->resource->imagesAsArrays('photos');
//            $cover = [
//                'default' => $this->resource->image('cover','default',['h'=> 320,'q' => 60]),
//                '1x' => $this->resource->image('cover','default',['h'=> 320, 'dpr' => 1,'q' => 60]),
//                '2x' => $this->resource->image('cover','default',['h'=> 320, 'dpr' => 2,'q' => 60]),
//            ];
        }
        return [
            'title' => $this->title,
            'print' => $this->print,
            'edition_number' => $this->edition_number,
            'size' => $this->size,
            'year' => Carbon::parse($this->date)->format('Y'),
            'photos' => $photos ?? null
        ];
    }
}
