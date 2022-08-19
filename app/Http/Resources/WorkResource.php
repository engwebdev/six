<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
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
        return [
            'id' => $this->resource->id,
            'subcategory_id' => $this->resource->subcategory_id,
            'subcategory_name' => $this->resource->subcategory_name,
            'title' => $this->resource->title,
            'work_nature' => $this->resource->work_nature,
            'type_location' => $this->resource->type_location,
            'subcategory_accept_status' => $this->resource->subcategory_accept_status,
            'subcategory_publish_status' => $this->resource->subcategory_publish_status,
            'subcategory_show_status' => $this->resource->subcategory_show_status,
            'subcategory_confirm_user_id' => $this->resource->subcategory_confirm_user_id,
            'subcategory_confirm_comment_id' => $this->resource->subcategory_confirm_comment_id,
            'subcategory_confirm_comment_value' => $this->resource->subcategory_confirm_comment_value,
        ];
    }
}
