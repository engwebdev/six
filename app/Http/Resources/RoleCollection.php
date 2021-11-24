<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;


class RoleCollection extends ResourceCollection {
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        $data = $this->collection;
//        $data = [
//            $this->collection,
//        ];

//        $data = [
//            'data' => $this->collection,
//        ];


//        dd($this);
//        $data['xxx'] = $this->whenPivotLoaded('roles_shops_users', function () {
//            dd($this->pivot_shop_id);
////            return $this->pivot;
//        });
//        if ($this->relationLoaded('pivot'))
//        {dd($this->relationLoaded('pivot'));
//            $data['pivot'] = $this->relationLoaded( 'pivot' );
//        }

        return $data;
    }
}
