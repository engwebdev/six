<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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
     * @return BelongsToMany
     */
    public function normalProductTags()
    {
//        return $this->belongsToMany( ProductTag::class, 'product_tags_tags', 'productable_id', 'product_tags_id', '', '', '')->withPivot( 'product_tag_accept_status' );
//        return $this->morphToMany( ProductTag::class, 'product_tags_tags')->withPivot( 'product_tags_tags_status' );
        return $this->morphedByMany(
            NormalProduct::class,
            'product_tags_tags',
            'product_tags_tags',
            'productable_id',
            'product_tags_id',
            'id',
            'id');

    }

    /**
     * @return MorphMany
     */
    public function normalProductPrices()
    {
        return $this->morphMany( ProductPriceHistory::class, 'product_price_historiable', 'NormalProduct');
    }

    /**
     * @return MorphMany
     */
    public function normalProductImages()
    {
        return $this->morphMany( ProductsImage::class, 'products_imageable', 'products_imageable_type');
    }

    /**
     * @return MorphMany
     */
    public function normalProductCustomerComments()
    {
        return $this->morphMany( ProductCustomerComments::class, 'product_commentable', 'NormalProduct');
    }

    /**
     * @return MorphMany
     */
    // todo tree in child tbl rel with 'product_status_confirm_user_id' && 'product_status_confirm_user_comment'
    public function normalProductStatuses()
    {
//        return $this->hasMany(ConfirmComment::class, 'id', 'confirm_commentable_id');
        return $this->morphMany( ConfirmComment::class, 'confirm_commentable', 'confirm_commentable_type', 'confirm_commentable_id', 'id');
    }

    /**
     * @return MorphMany
     */
    // todo complex relational
    public function normalProductDetails()
    {
        return $this->morphMany( Detail::class, 'detilable', 'NormalProduct');
    }
}







