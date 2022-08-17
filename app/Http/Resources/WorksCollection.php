<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class WorksCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cover' => $this->resource->image('cover','default'),
            'date' => Carbon::parse($this->date)->format('Y'),
            'title' => $this->title,
            'slug' => $this->resource->slug
        ];
    }
}
