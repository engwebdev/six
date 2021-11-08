<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;


    /**
     * Get all of the posts that are assigned this tag.
     */
    public function normalProducts()
    {
        return $this->morphedByMany(NormalProduct::class, 'product_tags_tags');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function customProducts()
    {
        return $this->morphedByMany(CustomProduct::class, 'product_tags_tags');
    }
}
