<?php

namespace App\Strategies\ShopRegistrations;

//use App\Interfaces\ShopRegistration;
use App\Http\Resources\ShopResource;
use App\Interfaces\ShopRegistrationStrategy;
use Illuminate\Http\Request;

class StoreRegistration implements ShopRegistrationStrategy
{

    private Request $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function storeInsert():ShopResource // : ShopRegistration
    {
        // TODO: Implement storeInsert() method.
        $attributes = $this->request->attributes->all();

        $parent_shop_id = null; // todo remove
        $parent_account_id = null; // todo remove

        $child_account_id = $attributes['account_id'];
        $child_user_id = $attributes['user_id'];
        $child_role_id = $attributes['role_id'];
        $child_shop_id = $attributes['shop_id'];

        $shop = [];
        return new ShopResource($shop);
    }
}
