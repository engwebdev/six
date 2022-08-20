<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopsRelationParentableTypes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shop_owen_shop_parent_able_type';

    protected $fillable = [
        'id',
        'shop_id',
        'parent_able_id',
        'shop_parent_able_title',
        'shops_owen_parent_able_accept_status',
        'shops_owen_parent_able_publish_status',
        'shops_owen_parent_able_show_status',
        'type_additional_id',
        'type_confirm_user_id',
        'type_confirm_comment_id',
        'shops_owen_parent_able_confirm_comment_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
