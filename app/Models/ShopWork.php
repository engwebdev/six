<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopWork extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shops_works';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'shop_id',
        'shop_name',
        'work_id',
        'work_title',
        'subcategory_id',
        'subcategory_name',
        'shops_works_accept_status',
        'shops_works_publish_status',
        'shops_works_show_status',
        'shops_works_confirm_user_id',
        'shops_works_confirm_comment_id',
        'shops_works_confirm_comment_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
