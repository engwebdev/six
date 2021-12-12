<?php

namespace App\Models;

use App\Auth\Grants\CustomGrant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductCategory extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'parent_id',
        'product_category_name',
        'product_category_image_url',
        'product_category_additional_user_id',
        'product_category_additional_user_type',
        'product_category_accept_status',
        'product_category_publish_status',
        'product_category_show_status'
    ];

    /**
     * Get the ProductCategories for the ProductCategory.
     * @return HasMany
     */
    public function child()
    {
        return $this->hasMany( ProductCategory::class, 'parent_id', 'id' );
    }

    /**
     * Get the ProductCategory that owns the ProductCategories.
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo( ProductCategory::class, 'id', 'parent_id' );
    }

    // todo need to add child colman

    /**
     * Get the Shops that owns the Category.
     * // * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
        $normalProducts = $this->hasMany( NormalProduct::class, 'product_category_id', 'id' );
        $customProducts = $this->hasMany( CustomProduct::class, 'custom_product_category_id', 'id' );
        $normalServices = null;
        $customServices = null;
        return [
            'normalProducts' => $normalProducts,
            'customProducts' => $customProducts,
            'normalServices' => $normalServices,
            'customServices' => $customServices,
        ];
    }

    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function normalProducts()
    {
        return $this->hasMany( NormalProduct::class, 'product_category_id', 'id' );
    }

    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function customProducts()
    {
        return $this->hasMany( CustomProduct::class, 'custom_product_category_id', 'id' );
    }

    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function normalServices()
    {
        return $this->hasMany( NormalService::class, 'product_category_id', 'id' );
    }

    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function customServices()
    {
        return $this->hasMany( CustomService::class, 'custom_product_category_id', 'id' );
    }

    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function task()
    {
        return $this->hasMany( Task::class, 'task_category_id', 'id' );
    }

    /*****************/
    public function categoryAdditionalUser()
    {
        return $this->belongsTo( User::class, 'product_category_additional_user_id', 'id' );
    }
}
