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

//        return $data;
        //        return parent::toArray($request);
        return [
            'data' => $this->collection,
            'meta' => [
                'current_page' => (int) $this->currentPage(),
                'last_page' => (int) $this->lastPage(),
                'total_pages' => (int) $this->lastPage(),
                'per_page' => (int) $this->perPage(),
                'from' => (int) $this->firstItem(),
                'to' => (int) $this->lastItem(),
                'total' => (int) $this->total(),
                'count' => (int) $this->count(),
            ],
        ];
    }
}
