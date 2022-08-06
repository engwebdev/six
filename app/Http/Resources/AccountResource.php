<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
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
            'account_name' => $this->resource->account_name,
            'user_id' => $this->resource->user_id,
            'role_id' => $this->resource->role_id,
            'shop_id' => $this->resource->shop_id,
            'shop_account_size' => $this->resource->shop_account_size,
            'shop_account_type' => $this->resource->shop_account_type,
            'account_type' => $this->resource->account_type,
            'account_unique_value' => $this->resource->account_unique_value,
            'account_confirm_user_id' => $this->resource->account_confirm_user_id,
            'account_status_confirm_user' => $this->resource->account_status_confirm_user,
            'account_confirm_shopkeeper_id' => $this->resource->account_confirm_shopkeeper_id,
            'account_status_confirm_shopkeeper' => $this->resource->account_status_confirm_shopkeeper,
            'account_active_by_user_id' => $this->resource->account_active_by_user_id,
            'account_active_at' => $this->resource->account_active_at,
//            'category_accept_status' => $this->when( $param, $this->resource->shop_category_accept_status ),
        ];
    }
}
