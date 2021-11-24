<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed first_name
 * @property mixed last_name
 * @property mixed email
 * @property mixed mobile
 *
 *
 *
 */
class UserResource extends JsonResource
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
            'user_id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'mobile' => $this->mobile,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
//            'first_name' => $this->resource->category_name,
        ];
    }
}
