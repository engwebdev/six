<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_product_name',
        'custom_product_description',
        'custom_product_info',
        'custom_product_note',
        'custom_product_status_accept',
        'custom_product_status_confirm_user_id',
        'custom_product_status_confirm_user_comment',
        'custom_product_status_publish',
        'custom_product_status_publish_date',
        'custom_product_last_price',
        'custom_product_last_price_date',
        'custom_product_status_price_discount',
        'custom_product_last_price_discount_percentage',
        'custom_product_last_price_discount_type',
        'custom_product_index_image_url',
        'custom_product_category_id',
        'custom_product_category_name',
        'custom_product_shop_id',
        'custom_product_registry_shopkeeper_id',
        'custom_product_quantity_total',
        'custom_product_quantity_sold',
        'custom_product_quantity_selling',
        'custom_product_quantity_returned',
        'custom_product_number_comments',
        'custom_product_total_points',
        'custom_product_average_points',
        'custom_product_last_point',
    ];


    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function customProductCategory()
    {
        return $this->belongsTo( ProductCategory::class, 'id', 'custom_product_category_id' );
//        return $this->morphMany( ProductCategory::class, 'product_category', 'CustomProduct', null, 'custom_product_category_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo( Shop::class, 'id', 'product_shop_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function shopkeeper()
    {
        return $this->belongsTo( User::class, 'id', 'custom_product_registry_shopkeeper_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function customProductSystemConfirm()
    {
        return $this->belongsTo( User::class, 'id', 'custom_product_status_confirm_user_id' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customProductTags()
    {
        return $this->morphToMany( ProductTag::class, 'product_tags_tags')->withPivot( 'product_tags_tags_status' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customProductPrices()
    {
        return $this->morphMany( productPriceHistory::class, 'product_price_historiable', 'CustomProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customProductImages()
    {
        return $this->morphMany( ProductImage::class, 'product_imageable', 'CustomProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customProductCustomerComments()
    {
        return $this->morphMany( ProductCustomerComments::class, 'product_commentable', 'CustomProduct');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo tree in child tbl rel with 'product_status_confirm_user_id' && 'product_status_confirm_user_comment'
    public function normalProductStatuses()
    {
        return $this->morphMany( ConfirmComment::class, 'confirm_commentable', 'CustomProduct');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo complex relational
    public function normalProductDetails()
    {
        return $this->morphMany( Detail::class, 'detilable', 'CustomProduct');
    }
}
