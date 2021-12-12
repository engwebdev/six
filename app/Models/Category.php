<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

// todo add additional user colman
// edit fillable
/**
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'category_name',
        'category_image_url',
        'category_additional_user_id',
        'category_additional_user_type',
        'category_accept_status',
        'category_publish_status',
        'category_show_status',
    ];


    /**
     * Get the Shops that owns the Category.
     * @return HasMany
     */
    public function shops()
    {
        return $this->hasMany(Shop::class, 'category_id', 'id');
    }
}
