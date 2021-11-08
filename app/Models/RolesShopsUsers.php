<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class RolesShopsUsers extends Model {
    use HasFactory;
//    use HasRoles;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
        'shop_id',
        'shop_type',
    ];

    public function user()
    {
        return $this->belongsTo( User::class );
    }

    public function role()
    {
        return $this->belongsTo( Role::class );
    }

    // is true way for one to many
    public function shop()
    {
        return $this->belongsTo( Shop::class, 'shop_id', 'id' );
    }

//    public function ()
//    {
//
//    }

    /*********************/
//
//    public function shopOfRolesShopsUsers()
//    {
//        return $this->belongsTo( Shop::class, 'shop_id', 'id' );
//    }

    /*************** * ********/
    // todo not true

    public function shopNormalProducts()
    {
        return $this->hasOneThrough( NormalProduct::class, Shop::class );
    }

//    public function shopCustomProducts()
//    {
//        return $this->hasOneThrough(CustomProduct::class, Shop::class);
//    }

    /*    public function rolePermissions()
        {
            return $this->hasOneThrough(Permission::class, Role::class);
        }

        public function userRoles()
        {
            return $this->hasOneThrough(Role::class, User::class);
        }*/
}
