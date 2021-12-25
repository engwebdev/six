<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 *
 *
 * @property mixed    resource
 *
 *
 * @property resource id
 * @property resource product_name
 * @property resource product_description
 * @property resource product_info
 * @property resource product_note
 * @property resource product_status_accept
 * @property resource product_status_confirm_user_id
 * @property resource product_status_confirm_user_comment
 * @property resource product_status_publish
 * @property resource product_status_publish_date
 * @property resource product_last_price
 * @property resource product_last_price_date
 * @property resource product_status_price_discount
 * @property resource product_last_price_discount_percentage
 * @property resource product_last_price_discount_type
 * @property resource product_index_image_url
 * @property resource product_category_id
 * @property resource product_category_name
 * @property resource product_shop_id
 * @property resource product_registry_shopkeeper_id
 * @property resource product_quantity_total
 * @property resource product_quantity_sold
 * @property resource product_quantity_selling
 * @property resource product_quantity_returned
 * @property resource product_number_comments
 * @property resource product_total_points
 * @property resource product_average_points
 * @property resource product_last_point
 *
 * @property mixed    normal_product_statuses
 *
 * @property mixed    normalProductStatuses
 *
 *
 * Class UltraNormalProductIndexResource
 * @package App\Http\Resources
 *
 * @method relationLoaded(string $string)
 */
class UltraNormalProductIndexResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     *
     * @param Request $request
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
            'product_status_accept' => $this->resource->product_status_accept,
            'product_status_confirm_user_id' => $this->resource->product_status_confirm_user_id,
            'product_status_confirm_user_comment' => $this->resource->product_status_confirm_user_comment,
            'normal_product_statuses' => ConfirmCommentResource::collection($this->normalProductStatuses)
//            'normal_product_statuses' => $this->normalProductStatuses->map(
//                function ($items) {
//                    $obj['id'] = $items->id;
//                    $obj['system_user_id'] = $items->system_user_id;
//                    $obj['system_user_comment'] = $items->system_user_comment;
//                    $obj['confirm_comment_value'] = $items->confirm_comment_value;
//                    $obj['type_review'] = $items->type_review;
//                    $obj['type_status'] = $items->type_status;
//                    $obj['parent_id'] = $items->parent_id;
//                    $obj['replies'] = $items->replies;
//
//                    return $obj;
//                }
//            ),
        ];

    }
}
