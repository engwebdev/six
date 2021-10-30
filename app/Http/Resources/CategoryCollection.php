<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{

    public $collection = CategoryResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return $this->collection->map(function ($category) {
//            return [
//                'id' => $this->id,
//                'category_name' => $this->category_name,
//            ];
//        });

//        return [
//            'data' => $this->collection,
//        ];
        return parent::toArray($request);
    }
}
