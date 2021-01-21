<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductByCategoryResources extends JsonResource
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
            'rating' => $this->rating,
            'images' => $images,
            'sold' => $this->sold,
            'harga' => $this->harga,
            'jumlah' => $this->jumlah,
        ];
    }
}
