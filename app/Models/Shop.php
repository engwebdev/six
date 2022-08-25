<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
//        'parent_id',
//        'parent_type',
//        'shop_category_id',
//        'shop_category_name',
//        'shop_category_type',
        'id',
        'name',
        'description',
        'shop_priority',
        'shop_accept_status',
        'shop_image_url',
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

        'shop_parent_able_status',
        'shop_parent_able_request',

        'shop_number_points',
        'shop_total_points',
        'shop_average_points',
        'shop_last_point',
        'additional_user_id',
        'shop_number_likes',
        'normal_product_number_likes',
        'created_at',
        'updated_at',
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
     * @return belongsToMany
     */
    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(
            Shop::class,
            'shops_owen_shops',
            'bottom_shop_id',
            'top_shop_id',
            'id',
            'id'
        )
//            ->withPivotValue(['type_top_between_bottom', 'type_shop_top', 'type_shop_bottom'])
            ->withPivot('id')
            ->withPivot('type_top_between_bottom')
            ->withPivot('type_shop_bottom')
            ->withPivot('type_shop_top')
            ->withTimestamps()
            ;
    }

    /**
     * Get the Shop that owns the Shops.
     * @return belongsToMany
     */
    public function children(): BelongsToMany
    {
        return $this->belongsToMany(
            shop::class,
            'shops_owen_shops',
            'top_shop_id',
            'bottom_shop_id',
            'id',
            'id'
        )
            ->whereNull('deleted_at')
//            ->withPivotValue(['type_top_between_bottom', 'type_shop_bottom', 'type_shop_top'])
            ->withPivot('id')
            ->withPivot('type_top_between_bottom')
            ->withPivot('type_shop_bottom')
            ->withPivot('type_shop_top')
            ->withTimestamps()
            ->withPivot(['deleted_at'])
            ;
    }

    /**
     * Get the Shop that owns the Shops.
     * @return belongsToMany
     */
    public function childrenWithTrashed(): BelongsToMany
    {
        return $this->belongsToMany(
            shop::class,
            'shops_owen_shops',
            'top_shop_id',
            'bottom_shop_id',
            'id',
            'id'
        )
//            ->withPivotValue(['type_top_between_bottom', 'type_shop_bottom', 'type_shop_top'])
            ->withPivot('id')
            ->withPivot('type_top_between_bottom')
            ->withPivot('type_shop_bottom')
            ->withPivot('type_shop_top')
            ->withTimestamps()
            ->withPivot(['deleted_at'])
            ;
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
     * @return belongsToMany
     */
    public function works(): BelongsToMany
    {
        return $this->belongsToMany(
            Work::class,
            'shops_works',
            'shop_id',
            'work_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('shop_name')
            ->withPivot('work_title')
            ->withPivot('subcategory_id')
            ->withPivot('subcategory_name')
            ->withPivot('shops_works_accept_status')
            ->withPivot('shops_works_publish_status')
            ->withPivot('shops_works_show_status')
            ->withPivot('shops_works_confirm_user_id')
            ->withPivot('shops_works_confirm_comment_id')
            ->withPivot('shops_works_confirm_comment_value')
        ;
    }


    /**
     * @return belongsToMany
     */
    public function access(): BelongsToMany
    {
        return $this->belongsToMany(
            Access::class, // todo todo *
            'access_shop',
            'shop_id',
            'access_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('access_id')
            ->withPivot('access_title')
            ->withPivot('shop_id')
            ->withPivot('shop_name')
            ->withPivot('start_access_time')
            ->withPivot('end_access_time')
            ->withPivot('length_access_time')
            ->withPivot('history_of_activated_number')
            ->withPivot('access_shop_option_status')
            ->withPivot('access_shop_accept_status')
            ->withPivot('access_shop_publish_status')
            ->withPivot('access_shop_show_status')
            ->withPivot('access_shop_confirm_user_id')
            ->withPivot('access_shop_confirm_comment_id')
            ->withPivot('access_shop_confirm_comment_value')
        ;
    }
    /******************************/

    /**
     * @return belongsToMany
     */
    public function parentableType(): BelongsToMany
    {
        return $this->belongsToMany(
            ShopParentableType::class,
            'shop_owen_shop_parent_able_type',
            'shop_id',
            'parent_able_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('shop_parent_able_title')
            ->withPivot('shops_owen_parent_able_accept_status')
            ->withPivot('shops_owen_parent_able_publish_status')
            ->withPivot('shops_owen_parent_able_show_status')
            ->withPivot('type_additional_id')
            ->withPivot('type_confirm_user_id')
            ->withPivot('type_confirm_comment_id')
            ->withPivot('shops_owen_parent_able_confirm_comment_value')
            ->withPivot('created_at')
            ->withPivot('updated_at')
            ->withPivot('deleted_at')
            ;
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
        return $this->belongsToMany(Tag::class, 'shop_shop_tags')->withPivot('tag_accept_status')->withTimestamps();
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
        return $query->where('shop_accept_status', '=', 0);
    }

    // query string scopes
    public function scopeOrder($query, $sort, $order)
    {
        return $query->orderBy($sort, $order);
    }
}
