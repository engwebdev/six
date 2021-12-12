<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTag extends Model
{
    use HasFactory;
    use SoftDeletes;


    /**
     * Get all of the posts that are assigned this tag.
     */
    public function normalProducts()
    {
//        return $this->belongsToMany( ProductTag::class, 'product_tags_tags', 'product_tags_id', 'productable_id', '', '','')->withPivot( 'product_tag_accept_status' );
        return $this->morphToMany(
            NormalProduct::class,
            'product_tags_tags',
            'product_tags_tags',
            'product_tags_id',
            'productable_id',
            'id',
            'id' );
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function customProducts()
    {
        return $this->morphedByMany(CustomProduct::class, 'product_tags_tags');
    }
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function normalService()
    {
        return $this->morphedByMany(NormalService::class, 'product_tags_tags');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function customService()
    {
        return $this->morphedByMany(CustomService::class, 'product_tags_tags');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function task()
    {
        return $this->morphedByMany(Task::class, 'product_tags_tags');
    }

    /************************/
    public function tagAdditionalUser()
    {
        return $this->belongsTo(User::class, 'product_tag_additional_user_id', 'id');
    }
}
