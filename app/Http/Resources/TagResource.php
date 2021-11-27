<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'tag_id' => $this->resource->id,
            'tag_name' => $this->resource->tag_name,
            'tag_accept_status' => $this->resource->tag_accept_status,
            'tag_publish_status' => $this->resource->tag_publish_status,
        ];
    }
}
