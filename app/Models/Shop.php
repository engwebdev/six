<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
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
        'parent_type',
        'shop_category_id',
        'shop_category_name',
        'shop_category_type',
        'name',
        'description',
        'shop_priority',
        'shop_accept_status',
        'shop_photo_url',
        'type_location',
        'lat_location',
        'long_location',
        'shop_country',
        'shop_province',
        'shop_city',
        'shop_local',
        'shop_street',
        'shop_alley',
        'shop_number',
        'shop_postal_code',
        'shop_main_phone_number',
        'shop_number_points',
        'shop_total_points',
        'shop_average_points',
        'shop_last_point',
        'shop_number_likes',
        'deleted_at',
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
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    /*****************************/
    /**
     * Get the Shops for the Shop.
     * @return HasMany
     */
    public function images()
    {
        return $this->hasMany(ShopImages::class, 'shop_id', 'id');
    }


    /******************************/

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
//        return $this->belongsToMany(Tag::class, 'shops_tags')->as('contract')->withPivot('tag_accept_status')->withTimestamps();
        return $this->belongsToMany(Tag::class, 'shops_tags')->withPivot('tag_accept_status')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tagsByAccept()
    {
        return $this->belongsToMany(Tag::class)->withPivot('tag_accept_status');
    }

    /******************************/

    /**
     * Get the Shop that owns the Accounts.
     * @return HasMany
     */
    public function account()
    {
        return $this->hasMany(Account::class, 'shop_id', 'id');
    }
    /******************************/
    // todo done many to many
    /**
     * Get the Shops for the Shop.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userOfRolesShopsUsers()
    {
//        return $this->hasMany(RolesShopsUsers::class, 'shop_id', 'id');
        return $this->belongsToMany(User::class,
            'roles_shops_users',
            'shop_id',
            'user_id',
            'id',
            'id'
            );
    }


    public function roleOfRolesShopsUsers()
    {
//        return $this->hasMany(RolesShopsUsers::class,'shop_id', 'id');
        return $this->belongsToMany(Role::class,
            'roles_shops_users',
            'shop_id',
            'role_id',
            'id',
            'id'
        );

    }




/*************************/

    public function normalProducts()
    {
        return $this->hasMany(NormalProduct::class, 'product_shop_id', 'id');
    }

    public function customProducts()
    {
        return $this->hasMany(CustomProduct::class, 'custom_product_shop_id', 'id');
    }

    public function normalServices()
    {
        return $this->hasMany(NormalService::class, 'normal_service_shop_id', 'id');
    }

    public function customServices()
    {
        return $this->hasMany(CustomService::class, 'custom_services_shop_id', 'id');
    }












     /******************************/
    // todo role_shop_user

    public function user()
    {
//        return $this->hasMany(RolesShopsUsers::class, 'roles_shops_users', 'id' , 'id', '', '', '');
        return $this->belongsToMany(User::class, 'roles_shops_users');
    }

    public function role()
    {
        return $this->belongsToMany(role::class, 'roles_shops_users');
    }


    /************************************/
    // scopes
    public function scopeShopAcceptStatus($query, $status)
    {
        return $query->where('shop_accept_status', $status);
    }

    public function scopeShopAccepted($query)
    {
        return $query->where('shop_accept_status', '=', 1);
    }

    public function scopeShopRejected($query)
    {
        return $query->where('shop_accept_status',  '=', 0);
    }

    // query string scopes
    public function scopeOrder($query, $sort, $order)
    {
        return $query->orderBy($sort, $order);
    }
}
