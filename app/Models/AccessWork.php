<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessWork extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'access_work';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'work_id',
        'work_name',
        'work_title',
        'access_id',
        'access_title',
        'access_work_accept_status',
        'access_work_publish_status',
        'access_work_show_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * @return BelongsTo
     */
    public function works(): BelongsTo
    {
        return $this->belongsTo(Work::class, 'work_id', 'id');
    }
}
