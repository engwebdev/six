<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'work_nature';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'subcategory_id',
        'subcategory_name',
        'title',
        'work_nature',
        'type_location',
        'subcategory_accept_status',
        'subcategory_publish_status',
        'subcategory_show_status',
        'subcategory_confirm_user_id',
        'subcategory_confirm_comment_id',
        'subcategory_confirm_comment_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * Get the Shops that owns the Category.
     * @return BelongsTo
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'subcategory_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function accesses(): HasMany
    {
        return $this->hasMany(AccessWork::class, 'work_id', 'id');
    }

    /****************************/
    /**
     * @return belongsToMany
     */
    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(
            shop::class,
            'shops_works',
            'work_id',
            'shop_id',
            'id',
            'id'
        )
            ->withPivot('id')
            ->withPivot('shop_name')
            ->withPivot('work_title')
            ->withPivot('subcategory_id')
            ->withPivot('subcategory_name')
            ->withPivot('shops_works_accept_status')
            ->withPivot('shops_works_publish_status')
            ->withPivot('shops_works_show_status')
            ->withPivot('shops_works_confirm_user_id')
            ->withPivot('shops_works_confirm_comment_id')
            ->withPivot('shops_works_confirm_comment_value')
            ;
    }
}
