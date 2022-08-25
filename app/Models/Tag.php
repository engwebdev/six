<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shop_tags';

    protected $fillable = [
        'id',
        'shop_tag_name',
        'shop_tag_image_url',
        'shop_tag_publish_status',
        'shop_tag_accept_status',
        'shop_tag_additional_type',
        'shop_tag_additional_user_id',
        'deleted_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shops()
    {
//        return $this->belongsToMany(shop::class, 'shops_tags', 'tag_id', 'id', null, null, null);
        return $this->belongsToMany(Shop::class, 'shop_shop_tags')->withPivot('tag_accept_status')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shopsByAccept()
    {
        return $this->belongsToMany(Shop::class)->withPivot('tag_accept_status');
    }
}



