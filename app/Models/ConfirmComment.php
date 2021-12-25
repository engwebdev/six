<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\TopModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

// todo add fillable

class ConfirmComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'confirm_comment';










//    /**
//     * Get the ConfirmComments for the ConfirmComment.
//     * @return HasMany
//     */
//    public function child()
//    {
//        return $this->hasMany(ConfirmComment::class, 'parent_id', 'id');
//    }
//
//    /**
//     * Get the ConfirmComment that owns the ConfirmComments.
//     * @return BelongsTo
//     */
//    public function parent()
//    {
//        return $this->belongsTo(ConfirmComment::class, 'parent_id', 'id');
//    }

    /**
     * Get the ConfirmComments for the ConfirmComment.
     * @return HasMany
     */
    public function replies() {
        return $this->hasMany(ConfirmComment::class, 'parent_id');
    }


    public function confirm_commentable()
    {
        return $this->morphTo();
    }


}
