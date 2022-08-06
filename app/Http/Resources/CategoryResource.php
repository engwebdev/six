<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
/*        if (auth()->user()->hasRole( 'system', 'api' ))
        {
            $param = true;
        }
        elseif ((auth()->user()->hasRole( 'shopkeeper', 'api' )) and ($this->resource->category_additional_user_id == auth()->user()->id))
        {
            $param = true;
        }
        else
        {
            $param = false;
        }*/


//        return parent::toArray($request);
//        dd($this);
        return [
            'cat_id' => $this->resource->id,
            'parent_id' => $this->resource->parent_id,
            'category_name' => $this->resource->shop_category_name,
            'category_image_url' => $this->resource->shop_category_image_url,
            'category_additional_user_id' => $this->resource->shop_category_additional_user_id,
//            'category_accept_status' => $this->when( $param, $this->resource->shop_category_accept_status ),
            'category_accept_status' => $this->resource->shop_category_accept_status,
            'category_publish_status' => $this->resource->shop_category_publish_status,
            'category_show_status' => $this->resource->shop_category_show_status,
            'category_confirm_user_id' => $this->resource->shop_category_confirm_user_id,
            'category_confirm_comment_id' => $this->resource->shop_category_confirm_comment_id,
            'category_confirm_comment_value' => $this->resource->shop_category_confirm_comment_value,

        ];
//        return parent::toArray($request);
//        return [
//            'data' => parent::toArray($request),
//            'pagination' => [
//                'total' => $request->total(),
//                'count' => $request->count(),
//                'per_page' => $request->perPage(),
//                'current_page' => $request->currentPage(),
//                'total_pages' => $request->lastPage()
//            ],
//        ];
    }
}
