<?php


namespace App\Repositories;

use App\Models\Shop;

class ShopRepositories extends RepositoryInterface {

    public function model()
    {
        return Shop::class;
    }

    public function getByShopId($id)
    {
        $shopkeeper_id = auth()->id();
        $shop = Shop::whereHas( 'userOfRolesShopsUsers', function ($query) use ($shopkeeper_id) {
            $query->where( 'roles_shops_users.user_id', '=', $shopkeeper_id );
        } )
            ->where( 'id', '=', (int) $id ) // for get all remove this line
            ->with( 'userOfRolesShopsUsers' )
            ->with( 'roleOfRolesShopsUsers' )
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

}
