<?php

namespace App\Strategies\ShopRegistrations;

use App\Http\Resources\ParentableCollection;
use App\Http\Resources\ShopResource;
use App\Models\Account;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchRegistration
{
    private Request $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function storeInsert() //: ShopResource // : ShopRegistration
    {
        // TODO: Implement storeInsert() method.
        $attributes = $this->request->attributes->all();

        $validator_registration = $this->request->validate([
            'parent_id' => [
                'required',
                'integer',
                'required_unless:registration_type,search',
                'exists:shops,id'
            ],
        ]);

        $parent_shop_id = $validator_registration['parent_id'];
        $parent_account_id = null; // todo remove

        $child_account_id = $attributes['account_id'];
        $child_user_id = $attributes['user_id'];
        $child_role_id = $attributes['role_id'];
        $child_shop_id = $attributes['shop_id'];

        // get parent type from parentable of shop by categories
        // $parentableType = $shop->findOrFail($parent_shop_id)->with('parentableType')->get();
        // $parentableType = $shop->findOrFail($parent_shop_id)->parentableType()->paginate();
        $parentableType = Shop::findOrFail($parent_shop_id)->parentableType()->get();

        return $parentableType;
         return new ParentableCollection($parentableType);
        // return new ParentableCollection($parentableType);
        // todo mehdi make new relation
/*        $shop->parents()->attach($parent_shop_id,
            [
                'type_shop_top' => 'owner',
                'type_shop_bottom' => 'client',
//                        'type_parent_able_id' => 1, // get from parent shop
                'type_top_between_bottom' => 'visit', // get from parent shop
            ]
        );*/
        // todo mehdi make update child account
/*        Account::findOrFail($child_account_id)->update(
            [
                'shop_id' => $shop->id,
                'shop_account_size' => 'branch',
                'shop_account_type' => 'visiting',
                'account_type' => 'servants',
            ]
        );*/
        // $account = Account::where(['id', '=', $child_account_id]);

        // return new AccountResource($account);
        // return $account;

        $shop = [];
        return new ShopResource($shop);
        return response()->json([
            "parentableType" => new ParentableCollection($parentableType),
            "message" => Shop::
//                    with('account')
//                        ->with('access')
//                        ->with('works')
//                        ->with('parents')
//                        ->with('children')
//                        ->with('images')
//                        ->with('categories')
//                        ->with('tags')
//                        ->
            find($shop->id, 'id'),
            "entity" => $shop,
            "id" => $shop->id,
        ], 201);
    }
}
