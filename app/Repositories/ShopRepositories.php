<?php

namespace App\Repositories;

use App\Interfaces\ShopRepositoryInterface;
use App\Repositories\RepositoryInterface;
use App\Models\Shop;
use App\Strategies\ShopRegistrations\QRCodeRegistration as qrcode;
use App\Strategies\ShopRegistrations\SearchRegistration as search;
use App\Strategies\ShopRegistrations\StoreRegistration as store;
use Illuminate\Http\Request;

class ShopRepositories extends RepositoryInterface implements ShopRepositoryInterface
{

    public function model()
    {
        return Shop::class;
    }

    public function getByShopId($id)
    {
        $shopkeeper_id = auth()->id();
        $shop = Shop::whereHas('userOfRolesShopsUsers', function ($query) use ($shopkeeper_id) {
            $query->where('roles_shops_users.user_id', '=', $shopkeeper_id);
        })
            ->where('id', '=', (int)$id) // for get all remove this line
            ->with('userOfRolesShopsUsers')
            ->with('roleOfRolesShopsUsers')
            ->first();
//        dd($shop);
        return $shop;

        //        $shop = Shop::with( 'userOfRolesShopsUsers' )->get();
        /*        $shop = Shop::whereHas( 'userOfRolesShopsUsers', function ($query) use ($shopkeeper_id) {
                    $query->where( 'roles_shops_users.user_id', '=', $shopkeeper_id );
                } )
                    ->where( 'id', '=', (int) $id ) // for get all remove this line
                    ->with( 'userOfRolesShopsUsers' )
                    ->with( 'roleOfRolesShopsUsers' )*/
//            ->with( ['roleOfRolesShopsUsers', function ($subQuery) use ($shopkeeper_id) {
//                $subQuery->;
//            }] )
        /*            ->get();*/
//        $shop = Shop::join('roles_shops_users', 'id', '=', 'shop_id', '', '')

        /*        $shop = Shop::whereHas(
                    'RolesShopsUsers',
                    function ($query) use ($shopkeeper_id) {
                        $query
                            ->whereHas('role'
                            )
                            ->with('role')
                            ->where( 'roles_shops_users.user_id', '=', $shopkeeper_id );
                    }
            )->with('RolesShopsUsers')
            ->where('id', '=', $id) // for get all remove this line
            ->get(); // result => "select * from `shops` where exists (select * from `roles_shops_users` where `shops`.`id` = `roles_shops_users`.`shop_id` and `roles_shops_users`.`user_id` = ".$shopkeeper_id.") and `shops`.`deleted_at` is null"*/

    }

    public function getShopOrderBySort($sort, $order)
    {
        return Shop::orderBy($sort, $order)->get();
    }

    public function storeWithStrategy(Request $request)
    {
        $validated = $request->validate(
            [
                'registration_type' => ['required', 'string'],
                'parent_id' => ['nullable', 'integer'],
                'account_id' => ['nullable', 'integer'],
                'name' => ['required', 'string', 'min:3'],
                'description' => ['required', 'string', 'min:5'],

                'tag_ids' => ['nullable'],
                'shop_tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],

                'shop_work_ids' => ['required', 'array', 'min:1'],
                'shop_work_ids.*' => ['required', 'integer', 'exists:shop_categories,id'],

                'shop_photo_ids.*' => ['nullable', 'integer'],
                'shop_Priority' => ['nullable', 'integer'],

                'type_location' => ['required', 'boolean'],
                'lat_location' => ['nullable', 'string', 'min:6'],
                'long_location' => ['nullable', 'string', 'min:6'],

                'locations' => ['nullable', 'array', 'min:3', 'max:5'],
                'locations.*' => ['nullable', 'array', 'size:2'],
                'locations.*.*' => ['nullable', 'string', 'min:6'],

                'shop_country' => ['nullable', 'string', 'min:8'],
                'shop_province' => ['nullable', 'string', 'min:8'],
                'shop_city' => ['nullable', 'string', 'min:8'],
                'shop_local' => ['nullable', 'string', 'min:8'],
                'shop_street' => ['nullable', 'string', 'min:8'],
                'shop_alley' => ['nullable', 'string', 'min:8'],
                'shop_number' => ['nullable', 'string'], // shomare pelak
                'shop_postal_code' => ['required', 'digits:10'],
                'shop_main_phone_number' => ['required', 'string', 'min:10', 'max:11'], // 02176543210  2176543210 11 or 10
            ]
        );


        $Registration_type = $validated['registration_type'];

        if ($Registration_type == 'store') {
            $shopRegistration = new store($request);
        }
        elseif ($Registration_type == 'search') {
            $shopRegistration = new search($request);
        }
        elseif ($Registration_type == 'qrcode') {
            $shopRegistration = new qrcode($request);
        }
        else {
            $shopRegistration = null;
        }
        $shop = $shopRegistration->storeInsert();
        return $shop;//->with('relations');
    }

}
