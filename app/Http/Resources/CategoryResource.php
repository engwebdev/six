<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
//        dd($this);
        return [
            'cat_id' => $this->resource->id,
            'category_name' => $this->resource->category_name,
            'category_image_url' => $this->resource->category_image_url,
//            'category_additional_user_id' => $this->resource->category_additional_user_id,
//            'category_additional_user_type' => $this->resource->category_additional_user_type,
//            'category_accept_status' => $this->resource->category_accept_status,
//            'category_publish_status' => $this->resource->category_publish_status,
//            'category_show_status' => $this->resource->category_show_status,

        ];
//        return parent::toArray($request);
//        return [
//            'data' => parent::toArray($request),
//            'pagination' => [
//                'total' => $request->total(),
//                'count' => $request->count(),
//                'per_page' => $request->perPage(),
//                'current_page' => $request->currentPage(),
//                'total_pages' => $request->lastPage()
//            ],
//        ];
    }
}
