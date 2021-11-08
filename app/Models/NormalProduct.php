<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NormalProduct extends Model {
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'product_description',
        'product_info',
        'product_note',
        'product_status_accept',
        'product_status_confirm_user_id',
        'product_status_confirm_user_comment',
        'product_status_publish',
        'product_status_publish_date',
        'product_last_price',
        'product_last_price_date',
        'product_status_price_discount',
        'product_last_price_discount_percentage',
        'product_last_price_discount_type',
        'product_index_image_url',
        'product_category_id',
        'product_shop_id',
        'product_registry_shopkeeper_id',
        'product_quantity_total',
        'product_quantity_sold',
        'product_quantity_selling',
        'product_quantity_returned',
        'product_number_comments',
        'product_total_points',
        'product_average_points',
        'product_last_point',

    ];

    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function normalProductCategory()
    {
        return $this->belongsTo( ProductCategory::class, 'id', 'product_category_id' );
//        return $this->morphMany( ProductCategory::class, 'product_categoryable', 'NormalProduct', null, 'product_category_id' );
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
        return $this->belongsTo( User::class, 'id', 'product_registry_shopkeeper_id' );
    }

    /**
     * Get the Category that owns the Shops.
     * @return BelongsTo
     */
    public function normalProductSystemConfirm()
    {
        return $this->belongsTo( User::class, 'id', 'product_status_confirm_user_id' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function normalProductTags()
    {
//        return $this->belongsToMany(tag::class, 'shops_tags', 'shop_id', 'id', null, null, null);
//        return $this->belongsToMany( Tags::class, 'product_tag', 'product_id', 'tag_id', '', '', '')->withPivot( 'product_tag_accept_status' );
        return $this->morphToMany( ProductTag::class, 'product_tags_tags')->withPivot( 'product_tags_tags_status' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function normalProductPrices()
    {
        return $this->morphMany( productPriceHistory::class, 'product_price_history', 'NormalProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function normalProductImages()
    {
        return $this->morphMany( ProductImage::class, 'product_image', 'NormalProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function normalProductCustomerComments()
    {
        return $this->morphMany( ProductCustomerComments::class, 'product_customer_comments', 'NormalProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo tree in child tbl rel with 'product_status_confirm_user_id' && 'product_status_confirm_user_comment'
    public function normalProductStatuses()
    {
        return $this->morphMany( ConfirmComment::class, 'confirm_comment', 'NormalProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // todo complex relational
    public function normalProductDetails()
    {
        return $this->morphMany( Detail::class, 'detail', '\'NormalProduct\'');
    }
}
