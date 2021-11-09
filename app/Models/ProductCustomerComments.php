<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCustomerComments extends Model
{
    use HasFactory;












    public function product_commentable()
    {
//        return $this->morphTo('product_price_historiable', 'NormalProduct', '', 'id');
        return $this->morphTo();
    }
}
