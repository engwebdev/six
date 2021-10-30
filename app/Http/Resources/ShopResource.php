<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'shop_photo_url' => $this->shop_photo_url,
            'type_location' => $this->type_location,
            'lat_location' => $this->lat_location,
            'long_location' => $this->long_location,
            'shop_country' => $this->shop_country,
            'shop_province' => $this->shop_province,
            'shop_city' => $this->shop_city,
            'shop_local' => $this->shop_local,
            'shop_Street' => $this->shop_Street,
            'shop_alley' => $this->shop_alley,
            'shop_number' => $this->shop_number,
            'shop_postal_code' => $this->shop_postal_code,
            'shop_main_phone_number' => $this->shop_main_phone_number,

        ];
//        return parent::toArray($request);
    }
}
