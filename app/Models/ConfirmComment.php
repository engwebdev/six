<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// todo add fillable

class ConfirmComment extends Model
{
    use HasFactory;
    use SoftDeletes;















    public function confirm_commentable()
    {
//        return $this->morphTo('product_price_historiable', 'NormalProduct', '', 'id');
        return $this->morphTo();
    }


}
