<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Law extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'laws';

    protected $fillable = [
        'law_text',
        'law_type_id',
        'law_type',
        'law_accept_status',
        'law_publish_status',
        'law_show_status',
        'law_additional_user_id',
        'law_confirm_user_id',
        'law_confirm_comment_id',
        'law_additional_comment_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
