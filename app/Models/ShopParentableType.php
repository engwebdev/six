<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopParentableType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shop_parent_able_types';

    protected $fillable = [
        'id',
        'shop_parent_able_title',
        'shop_parent_able_fa_name',
        'shop_parent_able_en_name',
        'shops_parent_able_accept_status',
        'shops_parent_able_publish_status',
        'shops_parent_able_show_status',
        'parent_able_additional_user_id',
        'parent_able_additional_comment_id',
        'shops_parent_able_additional_comment_value',
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
            Shop::class,
            'shop_owen_shop_parent_able_type',
            'parent_able_id',
            'shop_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('shop_parent_able_title')
            ->withPivot('shops_owen_parent_able_accept_status')
            ->withPivot('shops_owen_parent_able_publish_status')
            ->withPivot('shops_owen_parent_able_show_status')
            ->withPivot('type_additional_id')
            ->withPivot('type_confirm_user_id')
            ->withPivot('type_confirm_comment_id')
            ->withPivot('shops_owen_parent_able_confirm_comment_value')
            ->withPivot('created_at')
            ->withPivot('updated_at')
            ->withPivot('deleted_at')
            ;
    }

}
