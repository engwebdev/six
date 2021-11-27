<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomService extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_services_name',
        'custom_services_description',
        'custom_services_info',
        'custom_services_note',
        'custom_services_status_accept',
        'custom_services_status_confirm_user_id',
        'custom_services_status_confirm_user_comment',
        'custom_services_status_publish',
        'custom_services_status_publish_date',
        'custom_services_last_price',
        'custom_services_last_price_date',
        'custom_services_status_price_discount',
        'custom_services_last_price_discount_percentage',
        'custom_services_last_price_discount_type',
        'custom_services_index_image_url',
        'custom_services_category_id',
        'custom_services_category_name',
        'custom_services_shop_id',
        'custom_services_registry_shopkeeper_id',
        'custom_services_quantity_sold',
        'custom_services_quantity_selling',
        'custom_services_quantity_returned',
        'custom_services_number_comments',
        'custom_services_total_points',
        'custom_services_average_points',
        'custom_services_last_point',
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
    public function customServiceSystemConfirm()
    {
        return $this->belongsTo( User::class, 'id', 'custom_services_status_confirm_user_id' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customServiceTags()
    {
        return $this->morphToMany( ProductTag::class, 'product_tags_tags')->withPivot( 'product_tags_tags_status' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customServicePrices()
    {
        return $this->morphMany( ProductPriceHistory::class, 'product_price_historiable', 'CustomService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customServiceImages()
    {
        return $this->morphMany( ProductImage::class, 'product_imageable', 'CustomService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function customServiceCustomerComments()
    {
        return $this->morphMany( ProductCustomerComments::class, 'product_commentable', 'CustomService');
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
        return $this->morphMany( Detail::class, 'detilable', 'CustomService');
    }

}
