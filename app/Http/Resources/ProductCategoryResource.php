<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed parent_id
 * @property mixed product_category_name
 * @property mixed product_category_additional_user_id
 * @property mixed product_category_additional_user_type
 * @property mixed product_category_accept_status
 * @property mixed product_category_publish_status
 * @property mixed product_category_show_status
 */

class ProductCategoryResource extends JsonResource
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
            'parent_id' => $this->parent_id,
            'product_category_name' => $this->product_category_name,
            'product_category_additional_user_id' => $this->product_category_additional_user_id,
            'product_category_additional_user_type' => $this->product_category_additional_user_type,
            'product_category_accept_status' => $this->product_category_accept_status,
            'product_category_publish_status' => $this->product_category_publish_status,
            'product_category_show_status' => $this->product_category_show_status,
        ];
    }
}
