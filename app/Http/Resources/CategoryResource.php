<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($this);
        return [
            'id' => $this->id,
            'category_name' => $this->category_name,
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
