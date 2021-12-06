<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCategoryCollection extends ResourceCollection {
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($this);
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

    public function with($request)
    {
        return [
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
