<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelationShop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shops_owen_shops';

    protected $fillable = [
        'type_shop_top',
        'top_shop_id',
        'type_shop_bottom',
        'bottom_shop_id',
        'type_top_between_bottom',
    ];

//    public function parentShop()
//    {
//        return $this->belongsTo(RelationShop::class, 'top_shop_id', 'bottom_shop_id');
//    }
//
//    public function childShop()
//    {
//        return $this->hasMany(RelationShop::class, 'bottom_shop_id', 'top_shop_id');
//    }
}
