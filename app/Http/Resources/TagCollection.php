<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TagCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
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
