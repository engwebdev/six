<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'tag_name',
        'tag_image_url',
        'tag_publish_status',
        'tag_accept_status',
        'tag_additional_type',
        'tag_additional_user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shops()
    {
//        return $this->belongsToMany(shop::class, 'shops_tags', 'tag_id', 'id', null, null, null);
        return $this->belongsToMany(Shop::class, 'shops_tags')->withPivot('tag_accept_status')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shopsByAccept()
    {
        return $this->belongsToMany(Shop::class)->withPivot('tag_accept_status');
    }
}



