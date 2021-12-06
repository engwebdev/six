<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

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
class UltraTagShopStatusCollection extends ResourceCollection {
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($request);
        return parent::toArray( $request );

//        return [
//            'id' => $this->id,
//            'tag_name' => $this->tag_name,
//            'tag_image_url' => $this->tag_image_url,
//            'tag_publish_status' => $this->tag_publish_status,
//            'tag_accept_status' => $this->tag_accept_status,
//            'tag_accept_status_use' => $this->tag_accept_status_use,
//            'tag_additional_type' => $this->tag_additional_type,
//            'tag_additional_user_id' => $this->tag_additional_user_id,
//            'shop_id' => $this->shop_id,
//            'meta' => [
//                'current_page' => (int) $this->currentPage(),
//                'last_page' => (int) $this->lastPage(),
//                'total_pages' => (int) $this->lastPage(),
//                'per_page' => (int) $this->perPage(),
//                'from' => (int) $this->firstItem(),
//                'to' => (int) $this->lastItem(),
//                'total' => (int) $this->total(),
//                'count' => (int) $this->count(),
//            ],
//        ];

    }
}
