<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NormalProductResource extends JsonResource
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
            'product_name' => $this->resource->product_name,
            'product_description' => $this->resource->product_description,
            'product_info' => $this->resource->product_info,
            'product_note' => $this->resource->product_note,
            'product_status_accept' => $this->resource->product_status_accept,
            'product_status_confirm_user_id' => $this->resource->product_status_confirm_user_id,
            'product_status_confirm_user_comment' => $this->resource->product_status_confirm_user_comment,
            'product_status_publish' => $this->resource->product_status_publish,
            'product_status_publish_date' => $this->resource->product_status_publish_date,
            'product_last_price' => $this->resource->product_last_price,
            'product_last_price_date' => $this->resource->product_last_price_date,
            'product_status_price_discount' => $this->resource->product_status_price_discount,
            'product_last_price_discount_percentage' => $this->resource->product_last_price_discount_percentage,
            'product_last_price_discount_type' => $this->resource->product_last_price_discount_type,
            'product_index_image_url' => $this->resource->product_index_image_url,
            'product_category_id' => $this->resource->product_category_id,
            'product_category_name' => $this->resource->product_category_name,
            'product_shop_id' => $this->resource->product_shop_id,
            'product_registry_shopkeeper_id' => $this->resource->product_registry_shopkeeper_id,
            'product_quantity_total' => $this->resource->product_quantity_total,
            'product_quantity_sold' => $this->resource->product_quantity_sold,
            'product_quantity_selling' => $this->resource->product_quantity_selling,
            'product_quantity_returned' => $this->resource->product_quantity_returned,
            'product_number_comments' => $this->resource->product_number_comments,
            'product_total_points' => $this->resource->product_total_points,
            'product_average_points' => $this->resource->product_average_points,
            'product_last_point' => $this->resource->product_last_point,
//            'id' => $this->resource->id,
//            'normal_product_statuses' => $this->resource->normal_product_statuses,
        ];
    }
}
