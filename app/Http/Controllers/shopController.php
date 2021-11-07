<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\ShopCollection;
use App\Http\Resources\ShopResource;
use App\Models\RolesShopsUsers;
use App\Models\Shop;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class shopController extends Controller {
    // todo one to many polymorphic between -confirm_comment- -history_price- -image- -category- -tag- -customer_comment- -- -- -- -- -- --
    // todo -shop_confirm_comment- -shop_comment- --

    /**
     * @OA\Get(
     * path="/api/v1/shops",
     * operationId="get shops",
     * tags={"Shops"},
     * summary="get all shops. => for system admin and all customers",
     * description="get all shops",
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     *
     *
     *
     * ),
     *
     */
    /**
     *
     * Get
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
//        $shopkeeper_id = auth()->id();
//        dd($shopkeeper_id);
//        dd($request->query->all());
//        dd($request->input());
//        dd($request);
        // center => 35.7705959,51.1262078 // tehran
        // right => 35.6862143,54.2505103
        // left => 35.7629133,49.9820273
        // top => 37.4026932,51.4802673
        // bottom => 31.9983325,51.1800853
        // 35.6880403    51.3737222
        // 35.6862045    51.4629649
        $page = $request->input( 'page' );
        $limit = $request->input( 'limit' );

        /**
         * @var string $zoom
         * for show top level location in shop table
         */
//        $zoom = $request->input( 'zoom' );; // todo location add to query latitude longitude
//        $radius = $request->input( 'radius' );; // todo location add to query , radius
//        $longitude = $request->input( 'longitude' );; // todo location add to query , longitude //طول جغرافیایی // by e or w
//        $latitude = $request->input( 'latitude' );; // todo location add to query , latitude // عرض جغرافیایی // by n or s
//        $NWLongitude = $request->input( 'NWLongitude' );; // todo location add to query , longitude
//        $NWLatitude = $request->input( 'NWLatitude' );; // todo location add to query , latitude
////        $radius = 5;
////        $longitude = 35.6880403;
////        $latitude = 51.3737222;
        /*
        DB::('SELECT id,
        (
            6371 * acos(
                cos(
                    radians( 18.5789 )
                ) * cos(
                    radians( latitude )
                ) * cos(
                    radians( longitude ) - radians( 73.7707 )
                ) + sin(
                    radians( 18.5789 )
                ) * sin(
                    radians( latitude )
                )
            )
        ) AS distance FROM shops HAVING distance < 50 ORDER BY distance');
        */


        if ($request->input( 'sort' ))
        {
            $validate_sort = $request->validate(
                [
                    'sort' => ['string'],
                ]
            );
            $sort = $validate_sort['sort'];
        }
        else
        {
            $sort = 'id';
        }
        if ($request->input( 'order' ))
        {
            $validate_order = $request->validate(
                [
                    'order' => ['string', 'min:3', 'max:4'],
                ]
            );
            $order = $validate_order['order'];
        }
        else
        {
            $order = 'asc';
        }
        if ($request->input( 'page' ))
        {
            $validate_page = $request->validate(
                [
                    'page' => ['numeric'],
                ]
            );
            $page = $validate_page['page'];
        }
        else
        {
            $page = 1;
        }
        if ($request->input( 'limit' ))
        {
            $validate_limit = $request->validate(
                [
                    'limit' => ['numeric'],
                ]
            );
            $limit = $validate_limit['limit'];
        }
        else
        {
            $limit = 20;
        }


        if ($request->input( 'longitude' ) and $request->input( 'latitude' ))
        {
            $validated_location_center = $request->validate(
                [
                    'latitude' => ['numeric', 'min:1'],
                    'longitude' => ['numeric', 'min:1'],
                ]
            );
            /*
//            dd($validated_location_center['latitude']);
            $validator_zoom = Validator::make( $validated_location_center, [
                'zoom' => ['required_unless:name:latitude,null', 'required_unless:name:longitude,null'],
            ] );

            $validator_NW = Validator::make( $validated_location_center, [
//                'NWLongitude' => ['required_with:latitude', 'required_with:longitude'],
//                'NWLatitude' => ['required_with:latitude', 'required_with:longitude'],
            ] );

//            dd($validator_zoom>errors());
            if (($validator_zoom ) or (!$validator_NW))
            {
                dd($validator_zoom->errors(), $validator_NW->errors());
                return response()->json( [
                    "message" => "Unknown server problem",
                    "errors" => [
                        "problem" => [
                            "Unknown server problem",
                        ],
                    ],
                ], 503 );
            }
            */
            $center_latitude = $validated_location_center['latitude'];
            $center_longitude = $validated_location_center['longitude'];

            if ($request->input( 'NWLongitude' ) or $request->input( 'NWLatitude' ))
            {
                $validated_location_corner = $request->validate(
                    [
                        'NWLatitude' => ['required', 'required_with:NWLongitude', 'numeric', 'min:1'],
                        'NWLongitude' => ['required', 'required_with:NWLatitude', 'numeric', 'min:1'],
                        'zoom' => ['required_with:NWLatitude', 'required_with:NWLongitude', 'numeric', 'min:1'],
                    ]
                );

                $zoom = $validated_location_corner['zoom'];

                $top = (float) $validated_location_corner['NWLatitude'];
                $left = (float) $validated_location_corner['NWLongitude'];
                $bottom = $center_latitude + ($center_latitude - $top);
                $right = $center_longitude + ($center_longitude - $left);

//                dd( 'top :' . $top, 'bottom :' . $bottom, 'left :' . $left, 'right :' . $right, 'zoom :' . $zoom );

                $shops = Shop::orderBy( $sort, $order )
//                    ->whereBetween( 'lat_location', [$top, $bottom] )
//                    ->whereBetween( 'long_location', [$left, $right] )

//                    ->where('shop_accept_status', '=', 1)
//                    ->where('shop_Priority', '<=', $zoom) // todo (notice : mehdi) top level number small, low level number biggest, shop_Priority = 'اولویت'
                    ->where( 'lat_location', '<=', $top )
                    ->where( 'lat_location', '>=', $bottom )
                    ->where( 'long_location', '<=', $left )
                    ->where( 'long_location', '>=', $right )
                    ->paginate( $limit, '*', 'page', $page );

                $ShopCollection = (new ShopCollection($shops));
                $ShopCollection->toJson();
                $Response = $ShopCollection->toResponse( $request );
                $Response->setStatusCode( 200 );

                return $Response;

            }
            elseif ($request->input( 'radius' ))
            {
                $validated_radius = $request->validate(
                    [
                        'radius' => ['required', 'numeric', 'min:1'],
                    ]
                );
                $radius = $validated_radius['radius'];

//                DB::enableQueryLog();
                // 35.7555503,51.3903363
                // 35.755448,51.3880994
                $shop = Shop::selectRaw(
                    '* ,
                (
                    6371000 * acos(
                        cos(radians(?)) * cos(radians(lat_location)) * cos(radians(long_location) - radians(?)
                    ) + sin(radians(?)) * sin(radians(lat_location))
                )
            ) AS distance', [$center_latitude, $center_longitude, $center_latitude] )
//            ->where('shop_accept_status', '=', 1)
//            ->where('shop_level_in_map', '>', 12) // todo zoom > value => shops -> more
                    ->having( "distance", "<", $radius ) // $radius meter
                    ->orderBy( 'distance', 'asc' )
                    ->limit( $limit )
//                    ->offset(0)
//                    ->get();
//                    ->toSql();
                    ->paginate( $limit, '*', 'page', $page );


//                $query = DB::getQueryLog();
//                $query = end($query);
//                dd($query);

                $ShopCollection = (new ShopCollection( $shop ));
                $ShopCollection->toJson();
                $Response = $ShopCollection->toResponse( $request );
                $Response->setStatusCode( 200 );
                return $Response;
            }
            else
            {
                return response()->json(
                    [
                        'message' => 'The given data was invalid.',
                        'errors' => [
                            'location north west' => [
                                'NWLatitude' => ['The NWLatitude field is required.'],
                                'NWLongitude' => ['The NWLongitude field is required.'],
                                'zoom' => ['The zoom field is required.'],
                            ],
                            'radius' => ['or The radius field is required.'],
                        ],
                    ],
                    422
                );
            }
        }
        else
        {
            $shops = Shop::orderBy( $sort, $order )
//                ->where( 'shop_accept_status', '=', 1 )
                ->paginate( $limit, '*', 'page', $page );

            $ShopCollection = (new ShopCollection( $shops ));
            $ShopCollection->toJson();

            $Response = $ShopCollection->toResponse( $request );
            $Response->setStatusCode( 200 );

            return $Response;
        }


//        ShopResource::collection( $shops );
////        $collection = new ShopCollection($shops);
//        return response()->json(
//            [
//                'data' => $shops,
//            ],
//            200
//        );
    }

    /**
     *
     * get /shops/create
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * @OA\Post(
     * path="/api/v1/shops",
     * operationId="newShop",
     * tags={"Shops"},
     * summary="create new shop. => only for shopkeeper",
     * description="create new shop",
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     *
     * post
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
//        dd($request);
//  need add identify ID look like telegram nullable and generation uniq number for add to parent
        try
        {
            $shopkeeper_id = auth()->id();
            if (auth()->user()->disable_at != null)
            {
//                dd( $shopkeeper_id );
                return response()->json( [
                    "message" => "Forbidden",
                    "errors" => [
                        "problem" => [
                            "No account with this profile was found.",
                        ],
                        'NotificationsEnServer' => "Your account has been deactivated. You are not allowed to register a shop.",
                        'NotificationsFaServer' => "اکانت شما غیرفعال شده است. شما اجازه ثبت فروشگاه ندارید.",
                    ],
                ], 403 );
            }
            else if (auth()->user()->deleted_at != null)
            {
                return response()->json( [
                    "message" => "Resource Not Found",
                    "errors" => [
                        "problem" => [
                            "No account with this profile was found.",
                        ],
                        'NotificationsEnServer' => "No account with this profile was found.",
                        'NotificationsFaServer' => "اکانتی با این مشخصات پیدا نشد.",
                    ],
                ], 404 );
            }// mobile_verified_at,


            // todo added   ' shop_Priority '   default 17 => بی اهمیت
            $validated = $request->validate(
                [
                    'parent_id' => ['nullable', 'integer'],
                    'name' => ['required', 'string', 'min:3'],
                    'category_id' => ['required', 'integer', 'exists:categories,id'],
                    'description' => ['required', 'string', 'min:5'],
                    'shop_photo_url' => ['nullable', 'string'],
                    'type_location' => ['required', 'boolean'],
                    'lat_location' => ['nullable', 'string', 'min:8'],
                    'long_location' => ['nullable', 'string', 'min:8'],
                    'shop_country' => ['nullable', 'string', 'min:8'],
                    'shop_province' => ['nullable', 'string', 'min:8'],
                    'shop_city' => ['nullable', 'string', 'min:8'],
                    'shop_local' => ['nullable', 'string', 'min:8'],
                    'shop_Street' => ['nullable', 'string', 'min:8'],
                    'shop_alley' => ['nullable', 'string', 'min:8'],
                    'shop_number' => ['nullable', 'string', 'min:8'],
                    'shop_postal_code' => ['required', 'digits:10'],
                    'shop_main_phone_number' => ['required', 'string', 'min:10', 'max:11'], // 09876543210  9876543210 11 or 10
                ]
            );

            /**
             * if type_location = false => location is dynamic
             * if type_location = true => location is static
             *
             * @var array $validator
             */
            $validator = Validator::make( $validated, [
                'lat_location' => ['required_unless:type_location,false'],
                'long_location' => ['required_unless:type_location,false'],
            ] );
            if ($validator->fails())
            {
                $exception = $validator->messages();
                return response()->json( [
                    "message" => "The given data was invalid.",
                    "errors" => $validator->messages(),
                ], 422 );
            }


            if (!$validated)
            {
                return response()->json( [
                    "message" => "Unknown server problem",
                    "errors" => [
                        "problem" => [
                            "Unknown server problem",
                        ],
                    ],
                ], 503 );
            }

//            dd($validated);

            /**
             * shop accept status default false => not accepted by admin
             *
             * @var boolean $validated
             * @lang shop_accept_status
             */
            $shop = Shop::create(
                [
                    'parent_id' => null,
                    'name' => $validated['name'],
                    'category_id' => $validated['category_id'],
                    'description' => $validated['description'],
                    'shop_accept_status' => false,
                    'shop_photo_url' => $validated['shop_photo_url'],
                    'type_location' => $validated['type_location'],
                    'lat_location' => $validated['lat_location'],
                    'long_location' => $validated['long_location'],
                    'shop_country' => $validated['shop_country'],
                    'shop_province' => $validated['shop_province'],
                    'shop_city' => $validated['shop_city'],
                    'shop_local' => $validated['shop_local'],
                    'shop_Street' => $validated['shop_Street'],
                    'shop_alley' => $validated['shop_alley'],
                    'shop_number' => $validated['shop_number'],
                    'shop_postal_code' => $validated['shop_postal_code'],
                    'shop_main_phone_number' => $validated['shop_main_phone_number'],
                ]
            );
//            dd($shop);
            $success['id'] = $shop->id;
            // new user_role_shop
            // user_id => ($shopkeeper_id), role_id => (shopkeeper), shop_id => ($shop->id), shop_type => (child)
            // $shop->tags()->attach($tag);
            $shop->user()->attach($shopkeeper_id, ['shop_type' => 'child', 'role_id' => 1]);

            $responseCode = 201;
            $message = 'New Shop Created';
            $notifications_En_Server = 'New Shop Created';
            $notifications_Fa_Server = 'فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد.';

            return response()->json( [
                'message' => $message,
                'success' => $success,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode );

        }
        catch (MyException $exception)
//        catch (ShopStoreException $exception)
        {


        }
    }

    /**
     * @OA\Get(
     * path="/api/v1/shops/{id}",
     * operationId="get shops id",
     * tags={"Shops"},
     * summary="get Shop by id in url. => for shopkeeper and system admin",
     * description="get Shop by id in patch 'url'",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Tag",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     *
     */
    /**
     *
     * get /tags/{tag}
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        dd(auth::guard('api'));


        DB::enableQueryLog();

        //
        $shopkeeper_id = auth()->id();

        $shop = Shop::whereHas(
                    'RolesShopsUsers'
                    , function ($query) use ($shopkeeper_id) {
                        $query
                            ->whereHas('role'
                            )
                            ->with('role')
                            ->where( 'roles_shops_users.user_id', '=', $shopkeeper_id );
                    }
            )->with('RolesShopsUsers')
            ->where('id', '=', $id) // for get all remove this line
            ->get(); // result => "select * from `shops` where exists (select * from `roles_shops_users` where `shops`.`id` = `roles_shops_users`.`shop_id` and `roles_shops_users`.`user_id` = ".$shopkeeper_id.") and `shops`.`deleted_at` is null"

//        $shop = Shop::join('roles_shops_users', 'id', '=', 'shop_id', '', '')

        return $shop;
//        $query = DB::getQueryLog();
//        $query = end( $query );
//        dd( $query );





/*        // todo many to many not work
        $shop = Shop::
        with(
//            'user'
            ['user' => function ($query) {
//                $query->wherePivot( 'user_id', '=', 2 );
                $query->where( 'roles_shops_users.user_id', 2 );
            }]
        )
//            ->where('user_id', '=', 2)
            ->get();
//        dd($shop);
//        $query = DB::getQueryLog();
//        $query = end( $query );
//        dd( $query );
        return $shop;*/

    }

    /**
     *
     * get /tags/{tag}/edit
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * @OA\Put(
     * path="/api/v1/shops/{id}",
     * operationId="updateShop",
     * tags={"Shops"},
     * summary="update shops. => only for shopkeeper and system admin",
     * description="update shops",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Category",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     */
    /**
     *
     * PUT/PATCH /tags/{tag}
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }




    /**
     * @OA\Delete(
     * path="/api/v1/shops/{id}",
     * operationId="deleteShop",
     * tags={"Shops"},
     * summary="delete shop. => only for system admin",
     * description="delete shop",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Tag",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     */
    /**
     *
     * DELETE /tags/{tag}
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}


