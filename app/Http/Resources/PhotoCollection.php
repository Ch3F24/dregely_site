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
            $photos = $this->resource->imagesAsArrays('photos','default',['w' => 768,'q' => 80]);
        }
        return [
            'title' => $this->title,
            'print' => $this->print,
            'edition_number' => $this->edition_number,
            'size' => $this->size,
            'year' => $this->year,
            'photos' => $photos ?? null
        ];
    }
}
