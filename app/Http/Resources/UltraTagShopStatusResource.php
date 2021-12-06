<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UltraTagShopStatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'tag_name' => $this->tag_name,
            'tag_image_url' => $this->tag_image_url,
            'tag_publish_status' => $this->tag_publish_status,
            'tag_accept_status' => $this->tag_accept_status,
            'tag_accept_status_use' => $this->tag_accept_status_use,
            'tag_additional_type' => $this->tag_additional_type,
            'tag_additional_user_id' => $this->tag_additional_user_id,
            'shop_id' => $this->shop_id,
        ];
    }
}
