<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
//        if (is_null($this->resource)) {
//            $this->resource = [];
//        }
//        dd($this);
//        return parent::toArray($request);
        return [
            'tag_id' => $this->resource->id,
            'tag_name' => $this->resource->shop_tag_name,
            'tag_accept_status' => $this->resource->shop_tag_accept_status,
            'tag_publish_status' => $this->resource->shop_tag_publish_status,
        ];
    }


//    public function resolve($request)
//    {
//    }
}
