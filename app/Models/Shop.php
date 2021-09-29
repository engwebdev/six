<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shop
 * @package App\Models
 */
class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'name',
        'category_id',
    ];


    /**
     * Get the Shops for the Shop.
     * @return HasMany
     */
    public function child()
    {
        return $this->hasMany(Shop::class, 'parent_id', 'id');
    }

    /**
     * Get the Shop that owns the Shops.
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Shop::class, 'id', 'parent_id');
    }


    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
//        return $this->belongsToMany(tag::class, 'shops_tags', 'shop_id', 'id', null, null, null);
        return $this->belongsToMany(tag::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tagsByAccept()
    {
        return $this->belongsToMany(tag::class)->withPivot('tag_accept_status');
    }
}
