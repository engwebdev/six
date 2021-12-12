<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsImage extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'products_imageable_id',
        'products_imageable_type',
        'image_url',
        'image_thumbnail_url',
        'image_index_param',
        'image_type',
        'image_format',
        'image_size',
        'image_resolution',
        'file_name',
        'uploader_user_id',
        'uploader_user_date',
        'activate_status',
        'accept_status',
        'publish_status',
    ];


    public function product_imageable()
    {
//        return $this->morphTo('product_price_historiable', 'NormalProduct', '', 'id');
        return $this->morphTo();
    }
}
