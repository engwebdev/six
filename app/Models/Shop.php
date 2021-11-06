<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

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
        'description',
        'shop_accept_status',
        'shop_photo_url',
        'type_location',
        'lat_location',
        'long_location',
        'shopkeeper_id',
        'shop_country',
        'shop_province',
        'shop_city',
        'shop_local',
        'shop_Street',
        'shop_alley',
        'shop_number',
        'shop_postal_code',
        'shop_main_phone_number',
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
    public function categories()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
//        return $this->belongsToMany(tag::class, 'shops_tags', 'shop_id', 'id', null, null, null);
        return $this->belongsToMany(tag::class)->withPivot('tag_accept_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tagsByAccept()
    {
        return $this->belongsToMany(tag::class)->withPivot('tag_accept_status');
    }

    /******************************/

    /**
     * Get the Shops for the Shop.
     * @return HasMany
     */
    public function rolesShopsUsers()
    {
        return $this->hasMany(RolesShopsUsers::class, 'shop_id', 'id');
    }


//    public function ()
//    {
//        return $this->hasMany(::class, 'id', '_id');
//    }
//
//
//    public function ()
//    {
//        return $this->hasMany(::class, 'id', '_id');
//    }



















     /******************************/
    // todo role_shop_user

    public function user()
    {
        return $this->belongsToMany(User::class, 'roles_shops_users');
    }

    public function role()
    {
        return $this->belongsToMany(role::class);
    }

}
