<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use HasFactory;
    use SoftDeletes;








    public function detilable()
    {
//        return $this->morphTo('product_price_historiable', 'NormalProduct', '', 'id');
        return $this->morphTo();
    }
}
