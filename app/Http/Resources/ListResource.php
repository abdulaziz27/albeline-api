<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public static $wrap = 'products';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $images = ImageResource::collection($this->images->where('thumbnail', true));
        $categories = CategoryResource::collection($this->categories);
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'categories' => $categories,
            'rate' => $this->rate,
            'images' => $images,
            'sold' => $this->sold,
            'price' => $this->price,
            'qty' => $this->qty,
            'desc' => $this->desc,
        ];
    }
}
