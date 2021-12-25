<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed system_user_id
 * @property mixed system_user_comment
 * @property mixed confirm_comment_value
 * @property mixed type_review
 * @property mixed type_status
 * @property mixed confirm_commentable_id
 * @property mixed confirm_commentable_type
 * @property mixed parent_id
 *
 * @property mixed replies
 */
class ConfirmCommentResource extends JsonResource
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
            'id' => $this->id,
            'system_user_id' => $this->system_user_id,
            'system_user_comment' => $this->system_user_comment,
            'confirm_comment_value' => $this->confirm_comment_value,
            'type_review' => $this->type_review,
            'type_status' => $this->type_status,
            'confirm_commentable_id' => $this->confirm_commentable_id,
            'confirm_commentable_type' => $this->confirm_commentable_type,
            'parent_id' => $this->parent_id,
            'replies' => ConfirmCommentResource::collection($this->replies),
        ];
    }
}
