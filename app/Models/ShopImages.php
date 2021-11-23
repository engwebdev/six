<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopImages extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'shop_id',
        'shop_image_index_point',
        'shop_image_url',
        'shop_image_type',
        'shop_image_format',
        'shop_image_size',
        'shop_image_resolution',
        'shop_image_old_name',
        'shop_image_new_name',
        'shop_image_uploader_user_id',
        'shop_image_accept_status',
        'shop_image_active_status',
        'shop_image_publish_status',
        'shop_image_thumbnail_url',
        'shop_image_thumbnail_name',
    ];




    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo( User::class, 'id', 'shop_image_uploader_user_id' );
    }



    /**
     * Get the Category that owns the Shops.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo( Shop::class, 'id', 'shop_id' );
    }

}

