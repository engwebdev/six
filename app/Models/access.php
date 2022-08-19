<?php

namespace App\Models;

use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class access extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'accesses';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'farsi_name',
        'english_name',
        'access_type',
        'access_accept_status',
        'access_activation_status',
        'access_activator_admin_id ',
        'access_activator_comment_id',
        'access_activator_comment_value',
        'access_option_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /***************************************/
    /**
     * @return belongsToMany
     */
    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(
            shop::class,
            'access_shop',
            'access_id',
            'shop_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('access_id')
            ->withPivot('access_title')
            ->withPivot('shop_id')
            ->withPivot('shop_name')
            ->withPivot('start_access_time')
            ->withPivot('end_access_time')
            ->withPivot('length_access_time')
            ->withPivot('history_of_activated_number')
            ->withPivot('access_shop_option_status')
            ->withPivot('access_shop_accept_status')
            ->withPivot('access_shop_publish_status')
            ->withPivot('access_shop_show_status')
            ->withPivot('access_shop_confirm_user_id')
            ->withPivot('access_shop_confirm_comment_id')
            ->withPivot('access_shop_confirm_comment_value');
    }

}
