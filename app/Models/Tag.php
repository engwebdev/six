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
        'tag_name',
        'tag_accept_status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shops()
    {
//        return $this->belongsToMany(shop::class, 'shops_tags', 'tag_id', 'id', null, null, null);
        return $this->belongsToMany(shop::class)->withPivot('tag_accept_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shopsByAccept()
    {
        return $this->belongsToMany(shop::class)->withPivot('tag_accept_status');
    }
}
