<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed shop_parent_able_title
 * @property mixed shop_parent_able_fa_name
 * @property mixed shop_parent_able_en_name
 * @property mixed shops_parent_able_accept_status
 * @property mixed shops_parent_able_publish_status
 * @property mixed shops_parent_able_show_status
 * @property mixed parent_able_additional_user_id
 * @property mixed parent_able_additional_comment_id
 * @property mixed shops_parent_able_additional_comment_value
 *
 *
 *
//     * @property mixed userOfRolesShopsUsers
//     * @property mixed roleOfRolesShopsUsers
//     *
 * @property mixed data
//     * @method relationLoaded(string $string)
 */
class ParentableResource extends JsonResource
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
        $data = [
            'parent_able_id' => $this->resource->id,
            'shop_parent_able_title' => $this->resource->shop_parent_able_title,
            'shop_parent_able_fa_name' => $this->resource->shop_parent_able_fa_name,
            'shop_parent_able_en_name' => $this->resource->shop_parent_able_en_name,
            'shops_parent_able_accept_status' => $this->resource->shops_parent_able_accept_status,
            'shops_parent_able_publish_status' => $this->resource->shops_parent_able_publish_status,
            'shops_parent_able_show_status' => $this->resource->shops_parent_able_show_status,
            'parent_able_additional_user_id' => $this->resource->parent_able_additional_user_id,
            'parent_able_additional_comment_id' => $this->resource->parent_able_additional_comment_id,
            'shops_parent_able_additional_comment_value' => $this->resource->shops_parent_able_additional_comment_value,
        ];

        return $data;

    }
}
