<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class Account extends Model
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
        'account_name',
        'user_id',
        'role_id',
        'shop_id',
        'shop_account_size',
        'shop_account_type',
        'account_type',
        'account_unique_value',
        'account_confirm_user_id',
        'account_status_confirm_user',
        'account_confirm_shopkeeper_id',
        'account_status_confirm_shopkeeper',
        'account_active_by_user_id',
        'account_active_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * Get the Shops that owns the Accounts.
     * @return BelongsTo
     */
    public function shops()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    /**
     * Get the Users that owns the Accounts.
     * @return BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the Users that owns the Accounts.
     * @return BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

}
