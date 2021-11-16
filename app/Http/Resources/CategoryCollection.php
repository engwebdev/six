<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection {

    public $collection = CategoryResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return $this->collection->map(function ($category) {
//        return [
//            'id' => $this->resource->id,
//            'category_name' => $this->resource->category_name,
//            'category_image_url' => $this->resource->category_image_url,
//            'category_additional_user_id' => $this->resource->category_additional_user_id,
//            'category_additional_user_type' => $this->resource->category_additional_user_type,
//            'category_accept_status' => $this->resource->category_accept_status,
//            'category_publish_status' => $this->resource->category_publish_status,
//            'category_show_status' => $this->resource->category_show_status,
//        ];
//        });
//        return [
//            'data' => $this->collection,
//        ];
        return parent::toArray($request);
    }
}
