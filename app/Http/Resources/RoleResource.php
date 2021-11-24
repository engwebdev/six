<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed role_name
 * @property mixed guard_name
 */
class RoleResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);0
        return [
            'role_id' => $this->id,
            'role_name' => $this->role_name,
            'guard_name' => $this->guard_name,
        ];
    }
}
