<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NormalService extends Model
{
    use HasFactory;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'normal_service_name',
        'normal_service_timespan_by_minutes',
        'normal_service_number_sessions',
        'normal_service_last_price',
        'normal_service_last_price_date',
        'normal_service_status_price_discount',
        'normal_service_last_price_discount_percentage',
        'normal_service_last_price_discount_type',
        'normal_service_index_image_url',
        'normal_service_category_id',
        'normal_service_category_name',
        'normal_service_shop_id',
        'normal_service_registry_shopkeeper_id',
        'normal_service_status_accept',
        'normal_service_status_confirm_user_id',
        'normal_service_status_confirm_user_comment',
        'normal_service_status_publish',
        'normal_service_status_publish_date',
        'normal_service_number_comments',
        'normal_service_total_points',
        'normal_service_average_points',
        'normal_service_last_point',
    ];


    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customProductCategory()
    {
        return $this->belongsTo( ProductCategory::class, 'id', 'custom_services_category_id' );
//        return $this->morphMany( ProductCategory::class, 'product_category', 'CustomProduct', null, 'custom_product_category_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo( Shop::class, 'id', 'custom_services_shop_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shopkeeper()
    {
        return $this->belongsTo( User::class, 'id', 'custom_services_registry_shopkeeper_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customProductSystemConfirm()
    {
        return $this->belongsTo( User::class, 'id', 'custom_services_status_confirm_user_id' );
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
        return $this->morphMany( productPriceHistory::class, 'product_price_historiable', 'NormalService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customProductImages()
    {
        return $this->morphMany( ProductImage::class, 'product_imageable', 'NormalService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customProductCustomerComments()
    {
        return $this->morphMany( ProductCustomerComments::class, 'product_commentable', 'NormalService');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo tree in child tbl rel with 'product_status_confirm_user_id' && 'product_status_confirm_user_comment'
    public function normalProductStatuses()
    {
        return $this->morphMany( ConfirmComment::class, 'confirm_commentable', 'NormalService');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo complex relational
    public function normalProductDetails()
    {
        return $this->morphMany( Detail::class, 'detilable', 'NormalService');
    }
}
