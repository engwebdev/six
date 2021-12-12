<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCustomerComments extends Model
{
    use HasFactory;
    use SoftDeletes;












    public function product_commentable()
    {
//        return $this->morphTo('product_price_historiable', 'NormalProduct', '', 'id');
        return $this->morphTo();
    }
}
