<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParentableTypeConditions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'parent_able_type_conditions';

    protected $fillable = [
        'id',
        'parent_able_type_condition_title',
        'parent_able_type_condition_name',
        'parent_able_type_condition_value',
        'parent_able_id',
        'shop_parent_able_name',
        'parent_able_type_condition_accept_status',
        'parent_able_type_condition_publish_status',
        'parent_able_type_condition_show_status',
        'condition_additional_user_id',
        'condition_confirm_user_id',
        'condition_confirm_comment_id',
        'parent_able_type_condition_additional_comment_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
