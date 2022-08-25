<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed law_text
 * @property mixed law_type_id
 * @property mixed law_type
 * @property mixed law_accept_status
 * @property mixed law_publish_status
 * @property mixed law_show_status
 * @property mixed law_additional_user_id
 * @property mixed law_confirm_user_id
 * @property mixed law_confirm_comment_id
 * @property mixed law_additional_comment_value
 *
 *
 *
//     * @property mixed userOfRolesShopsUsers
//     * @property mixed roleOfRolesShopsUsers
//     *
 * @property mixed data
//     * @method relationLoaded(string $string)
 */
class LawResource extends JsonResource
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
            'id' => $this->resource->id,
            'law_text' => $this->resource->law_text,
            'law_type_id' => $this->resource->law_type_id,
            'law_type' => $this->resource->law_type,
            'law_accept_status' => $this->resource->law_accept_status,
            'law_publish_status' => $this->resource->law_publish_status,
            'law_show_status' => $this->resource->law_show_status,
            'law_additional_user_id' => $this->resource->law_additional_user_id,
            'law_confirm_user_id' => $this->resource->law_confirm_user_id,
            'law_confirm_comment_id' => $this->resource->law_confirm_comment_id,
            'law_additional_comment_value' => $this->resource->law_additional_comment_value,
        ];

        return $data;

    }
}
