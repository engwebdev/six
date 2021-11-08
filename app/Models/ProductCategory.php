<?php

namespace App\Models;

use App\Auth\Grants\CustomGrant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;



    // todo need to add child colman
    /**
     * Get the Shops that owns the Category.
     // * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
        $normalProducts = $this->hasMany(NormalProduct::class, 'product_category_id', 'id');
        $customProducts = $this->hasMany(CustomProduct::class, 'custom_product_category_id', 'id');
        $normalServices = null;
        $customServices = null;
        return [
            'normalProducts' => $normalProducts,
            'customProducts' => $customProducts,
            'normalServices' => $normalServices,
            'customServices' => $customServices,
        ];
    }

    /**
     * Get the Shops that owns the Category.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function normalProducts()
    {
        return $this->hasMany(NormalProduct::class, 'product_category_id', 'id');
    }

    /**
     * Get the Shops that owns the Category.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customProducts()
    {
        return $this->hasMany(CustomProduct::class, 'custom_product_category_id', 'id');
    }
}
