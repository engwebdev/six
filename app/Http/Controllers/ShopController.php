<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\ShopCollection;
use App\Http\Resources\ShopResource;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Http\Resources\UltraTagShopStatusCollection;
use App\Models\RolesShopsUsers;
use App\Models\Shop;
//use Auth;
use App\Models\ShopImages;
use App\Models\Tag;
use App\Repositories\ShopRepositories;
use Carbon\Carbon;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;
use App\Traits\QueryParams;


class ShopController extends Controller {

    use QueryParams;

    // todo one to many polymorphic between -confirm_comment- -history_price- -image- -category- -tag- -customer_comment- -- -- -- -- -- --
    // todo -shop_confirm_comment- -shop_comment- --
    private $shops;

    public function __construct(ShopRepositories $shops)
    {
        $this->shops = $shops;
    }

    /**
     * @OA\Get(
     * path="/api/v1/shops",
     * operationId="get shops",
     * tags={"Shops"},
     * summary="get all shops. => for system admin and all customers",
     * description="get all shops",
     *
     *
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="New Category Successfully",
     *
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New Category Successfully",
     *
     *      ),
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="Unauthenticated."),
     *          ),
     *
     *      ),
     *
     *      @OA\Response(response=403, description="Forbidden"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *      @OA\Response(response=405, description="Method Not Allowed"),
     *      @OA\Response(response=406, description="Not Acceptable"),
     *      @OA\Response(response=407, description="Proxy Authentication Required"),
     *      @OA\Response(response=410, description="Resource Gone"),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *
     *      @OA\Response(response=423, description="Resource Locked"),
     *      @OA\Response(response=429, description="Too Many Requests"),
     *      @OA\Response(response=451, description="Unavailable For Legal Reasons"),
     *
     *      @OA\Response(response=500, description="Internal Server"),
     *      @OA\Response(response=502, description="Bad Gateway"),
     *      @OA\Response(response=503, description="Service Unavailable"),
     *      @OA\Response(response=504, description="Gateway Timeout"),
     *      @OA\Response(response=505, description="HTTP Version Not Supported"),
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *
     *
     *
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
        // center => 35.7705959,51.1262078 // tehran
        // right => 35.6862143,54.2505103
        // left => 35.7629133,49.9820273
        // top => 37.4026932,51.4802673
        // bottom => 31.9983325,51.1800853
        // 35.6880403    51.3737222
        // 35.6862045    51.4629649
        /**
         * @var string $zoom
         * for show top level location in shop table
         */
        /*        $zoom = $request->query( 'zoom' );; // todo location add to query latitude longitude
                $radius = $request->query( 'radius' );; // todo location add to query , radius
                $longitude = $request->query( 'longitude' );; // todo location add to query , longitude //طول جغرافیایی // by e or w
                $latitude = $request->query( 'latitude' );; // todo location add to query , latitude // عرض جغرافیایی // by n or s
                $NWLongitude = $request->query( 'NWLongitude' );; // todo location add to query , longitude
                $NWLatitude = $request->query( 'NWLatitude' );; // todo location add to query , latitude
                $radius = 5;
                $longitude = 35.6880403;
                $latitude = 51.3737222;*/
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

        $this->checkQueryParams( $request );

        if ($request->query( 'longitude' ) and $request->query( 'latitude' ))
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

            if ($request->query( 'NWLongitude' ) or $request->query( 'NWLatitude' ))
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

                $shops = Shop::orderBy( $this->sort, $this->order )
//                    ->whereBetween( 'lat_location', [$top, $bottom] )
//                    ->whereBetween( 'long_location', [$left, $right] )
//                    ->where('shop_accept_status', '=', 1)
//                    ->where('shop_Priority', '<=', $zoom) // todo (notice : mehdi) top level number small, low level number biggest, shop_Priority = 'اولویت'
                    ->where( 'lat_location', '<=', $top )
                    ->where( 'lat_location', '>=', $bottom )
                    ->where( 'long_location', '<=', $left )
                    ->where( 'long_location', '>=', $right )
                    ->paginate( $this->limit, '*', 'page', $this->page );

                $ShopCollection = (new ShopCollection( $shops ));
                $ShopCollection->toJson();
                $Response = $ShopCollection->toResponse( $request );
                $Response->setStatusCode( 200 );

                return $Response;

            }
            elseif ($request->query( 'radius' ))
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
                    ->limit( $this->limit )
//                    ->offset(0)
//                    ->get();
//                    ->toSql();
                    ->paginate( $this->limit, '*', 'page', $this->page );


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
            $shops = Shop::orderBy( $this->sort, $this->order )
//                ->where( 'shop_accept_status', '=', 1 )
                ->paginate( $this->limit, '*', 'page', $this->page );

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
     * @OA\Post(
     * path="/api/v1/shops",
     * operationId="newShop",
     * tags={"Shops"},
     * summary="create new shop. => only for shopkeeper",
     * description="create new shop",
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"name", "description", "type_location", "shop_postal_code", "shop_main_phone_number", "shop_photo"},
     *               @OA\Property(
     *                  property="file",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="parent_id", type="integer", example="12", description="parent_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="name", type="integer", example="name", description="name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="category_id", type="integer", example="12", description="category_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="tag_ids", type="objet", example="[1, 2, 3, 8]", description="tag_ids", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="description", type="string", example="description", description="description", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="type_location", type="string", example="true or false || 0 or 1 ", description="type_location", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="lat_location", type="string", example="10.0000001", description="lat_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="long_location", type="string", example="10.0000001", description="long_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_country", type="string", example="iran", description="shop_country", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_province", type="string", example="tehran", description="shop_province", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_city", type="string", example="tehran", description="shop_city", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_local", type="string", example="sadeghiye", description="shop_local", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_Street", type="string", example="shop_Street", description="shop_Street", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_alley", type="string", example="shop_alley", description="shop_alley", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_number", type="string", example="02188118811", description="shop_number", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_postal_code", type="integer", example="9876543210", description="shop_postal_code", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="shop_main_phone_number", type="string", example="02188118811", description="shop_main_phone_number", default="null", nullable=true
     *               ),
     *
     *         ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "description", "type_location", "shop_postal_code", "shop_main_phone_number", "shop_photo"},
     *               @OA\Property(
     *                  property="file",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="parent_id", type="integer", example="12", description="parent_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="name", type="integer", example="name", description="name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="category_id", type="integer", example="12", description="category_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="tag_ids", type="object", format="array", example="[1, 2, 3, 8]", description="tag_ids", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="description", type="string", example="description", description="description", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="type_location", type="boolen", format="string", example="true or false || 0 or 1 ", description="type_location", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="lat_location", type="string", example="10.0000001", description="lat_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="long_location", type="string", example="10.0000001", description="long_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_country", type="string", example="iran", description="shop_country", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_province", type="string", example="tehran", description="shop_province", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_city", type="string", example="tehran", description="shop_city", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_local", type="string", example="sadeghiye", description="shop_local", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_Street", type="string", example="shop_Street", description="shop_Street", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_alley", type="string", example="shop_alley", description="shop_alley", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_number", type="string", example="02188118811", description="shop_number", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_postal_code", type="integer", example="9876543210", description="shop_postal_code", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="shop_main_phone_number", type="string", example="02188118811", description="shop_main_phone_number", default="null", nullable=true
     *               ),
     *
     *            ),
     *        ),
     *    ),
     *
     *
     *
     *
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="New shop Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="New Shop Created"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="id",
     *                      type="string",
     *                      format="string",
     *                      example="12"
     *                  ),
     *              ),
     *              @OA\Property(property="NotificationsEnServer", type="string", format="string", example="New Shop Created"),
     *              @OA\Property(property="NotificationsFaServer", type="string", format="string", example="فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد."),
     *          ),
     *      ),
     *
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New shop Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="New Shop Created"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="id",
     *                      type="string",
     *                      format="string",
     *                      example="12"
     *                  ),
     *              ),
     *              @OA\Property(property="NotificationsEnServer", type="string", format="string", example="New Shop Created"),
     *              @OA\Property(property="NotificationsFaServer", type="string", format="string", example="فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد."),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="Unauthenticated."),
     *          ),
     *
     *      ),
     *
     *      @OA\Response(response=403, description="Forbidden"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *      @OA\Response(response=405, description="Method Not Allowed"),
     *      @OA\Response(response=406, description="Not Acceptable"),
     *      @OA\Response(response=407, description="Proxy Authentication Required"),
     *      @OA\Response(response=410, description="Resource Gone"),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *
     *      @OA\Response(response=423, description="Resource Locked"),
     *      @OA\Response(response=429, description="Too Many Requests"),
     *      @OA\Response(response=451, description="Unavailable For Legal Reasons"),
     *
     *      @OA\Response(response=500, description="Internal Server"),
     *      @OA\Response(response=502, description="Bad Gateway"),
     *      @OA\Response(response=503, description="Service Unavailable"),
     *      @OA\Response(response=504, description="Gateway Timeout"),
     *      @OA\Response(response=505, description="HTTP Version Not Supported"),
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *
     *
     *
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
                    'tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],
                    'description' => ['required', 'string', 'min:5'],
                    'shop_photo' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
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

            /**
             * shop accept status default false => not accepted by admin
             *
             * @var boolean $validated
             * @lang shop_accept_status
             */
            $shop = Shop::create(
                [
                    'parent_id' => null,
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'description' => $request->description,
                    'shop_accept_status' => false,
//                    'shop_photo_url' => $request->shop_photo,
                    'type_location' => $request->type_location,
                    'lat_location' => $request->lat_location,
                    'long_location' => $request->long_location,
                    'shop_country' => $request->shop_country,
                    'shop_province' => $request->shop_province,
                    'shop_city' => $request->shop_city,
                    'shop_local' => $request->shop_local,
                    'shop_Street' => $request->shop_Street,
                    'shop_alley' => $request->shop_alley,
                    'shop_number' => $request->shop_number,
                    'shop_postal_code' => $request->shop_postal_code,
                    'shop_main_phone_number' => $request->shop_main_phone_number,
                ]
            );

//            model has role
            $success['id'] = $shop->id;
            if ($request->input( 'shop_photo' ))
            {
                $file = $validated['shop_photo'];
                $shop_photo_name = $request->file( 'shop_photo' )->getClientOriginalName();
                $format = (explode( '.', $shop_photo_name ));
                $file_name_is = $format[0];
                $file_format_is = end( $format );
                $name_in_store = $file_name_is . '-' . date( 'Y-m-d', strtotime( Carbon::now() ) ) . '.' . $file_format_is;

                $shop_photo_path = $request->file( 'shop_photo' )
                    ->storeAs( 'shop_id/' . $shop->id . '_shop_name_' . $shop->name, $name_in_store );

                $shop->shop_photo_url = 'shop/' . $shop_photo_path;
                $shop->save();
                $resolution = getimagesize( $file )[3];

                $image = ShopImages::create(
                    [
                        'shop_id' => $shop->id,
                        'shop_image_index_point' => 1,
                        'shop_image_url' => 'shop/' . $shop_photo_path,
                        'shop_image_type' => $file->getClientMimeType(),
                        'shop_image_format' => $file->guessClientExtension(),
                        'shop_image_size' => $file->getSize(),
                        'shop_image_resolution' => $resolution,
                        'shop_image_old_name' => $file->getClientOriginalName(),
                        'shop_image_new_name' => $name_in_store,
                        'shop_image_uploader_user_id' => $shopkeeper_id,
                        'shop_image_accept_status' => 0,
                        'shop_image_active_status' => 1,
                        'shop_image_publish_status' => 1,
                        'shop_image_thumbnail_url' => null,
                        'shop_image_thumbnail_name' => null,
                    ]
                );
            }
            // todo $shop->id and $tag_ids insert to pivot table
            if (isset( $validated['tag_ids'] ))
            {
                $tag_ids = $validated['tag_ids'];
                $shop->tags()->attach( $tag_ids, ['tag_accept_status' => 0] );
            }
//            $shop->tags()->sync($tag_ids, ['tag_accept_status' => 0]);

            // user_id => ($shopkeeper_id), role_id => (shopkeeper), shop_id => ($shop->id), shop_type => (child)
            // $shop->tags()->attach($tag);

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
            auth()->user()->guard_name = 'api';
            auth()->user()->assignRole( 'shopkeeper' );
            $shop->userOfRolesShopsUsers()->attach( $shopkeeper_id, ['shop_type' => 'child', 'role_id' => 1] );

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
     * @param int              $id
     * @param ShopRepositories $shops
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id, ShopRepositories $shops)
    {
//        auth::guard('api');
        DB::enableQueryLog();
        $shopkeeper_id = auth()->id();
        $shop = new ShopResource( $shops->getByShopId( $id ) );

        return $shop;
//        return response()->json( [
//            'shop' => $shop,
//            'shop_id' => $shop->id,
//        ], 200 );

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
     * @OA\Put(
     * path="/api/v1/shops/{id}",
     * operationId="updateShop",
     * tags={"Shops"},
     * summary="update shops. => only for shopkeeper and system admin",
     * description="update shops",
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
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"name", "description", "type_location", "shop_postal_code", "shop_main_phone_number", "shop_photo"},
     *               @OA\Property(
     *                  property="file",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="parent_id", type="integer", example="12", description="parent_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="name", type="integer", example="name", description="name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="category_id", type="integer", example="12", description="category_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="tag_ids", type="objet", example="[1, 2, 3, 8]", description="tag_ids", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="description", type="string", example="description", description="description", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="type_location", type="string", example="true or false || 0 or 1 ", description="type_location", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="lat_location", type="string", example="10.0000001", description="lat_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="long_location", type="string", example="10.0000001", description="long_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_country", type="string", example="iran", description="shop_country", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_province", type="string", example="tehran", description="shop_province", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_city", type="string", example="tehran", description="shop_city", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_local", type="string", example="sadeghiye", description="shop_local", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_Street", type="string", example="shop_Street", description="shop_Street", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_alley", type="string", example="shop_alley", description="shop_alley", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_number", type="string", example="02188118811", description="shop_number", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_postal_code", type="integer", example="9876543210", description="shop_postal_code", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="shop_main_phone_number", type="string", example="02188118811", description="shop_main_phone_number", default="null", nullable=true
     *               ),
     *
     *         ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "description", "type_location", "shop_postal_code", "shop_main_phone_number", "shop_photo"},
     *               @OA\Property(
     *                  property="file",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="parent_id", type="integer", example="12", description="parent_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="name", type="integer", example="name", description="name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="category_id", type="integer", example="12", description="category_id", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="tag_ids", type="object", format="array", example="[1, 2, 3, 8]", description="tag_ids", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="description", type="string", example="description", description="description", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="type_location", type="boolen", format="string", example="true or false || 0 or 1 ", description="type_location", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="lat_location", type="string", example="10.0000001", description="lat_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="long_location", type="string", example="10.0000001", description="long_location", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_country", type="string", example="iran", description="shop_country", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_province", type="string", example="tehran", description="shop_province", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_city", type="string", example="tehran", description="shop_city", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_local", type="string", example="sadeghiye", description="shop_local", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_Street", type="string", example="shop_Street", description="shop_Street", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_alley", type="string", example="shop_alley", description="shop_alley", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_number", type="string", example="02188118811", description="shop_number", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="shop_postal_code", type="integer", example="9876543210", description="shop_postal_code", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="shop_main_phone_number", type="string", example="02188118811", description="shop_main_phone_number", default="null", nullable=true
     *               ),
     *
     *            ),
     *        ),
     *    ),
     *
     *
     *
     *
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="New shop Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="New Shop Created"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="id",
     *                      type="string",
     *                      format="string",
     *                      example="12"
     *                  ),
     *              ),
     *              @OA\Property(property="NotificationsEnServer", type="string", format="string", example="New Shop Created"),
     *              @OA\Property(property="NotificationsFaServer", type="string", format="string", example="فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد."),
     *          ),
     *      ),
     *
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New shop Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="New Shop Created"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="id",
     *                      type="string",
     *                      format="string",
     *                      example="12"
     *                  ),
     *              ),
     *              @OA\Property(property="NotificationsEnServer", type="string", format="string", example="New Shop Created"),
     *              @OA\Property(property="NotificationsFaServer", type="string", format="string", example="فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد."),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="Unauthenticated."),
     *          ),
     *
     *      ),
     *
     *      @OA\Response(response=403, description="Forbidden"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *      @OA\Response(response=405, description="Method Not Allowed"),
     *      @OA\Response(response=406, description="Not Acceptable"),
     *      @OA\Response(response=407, description="Proxy Authentication Required"),
     *      @OA\Response(response=410, description="Resource Gone"),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *
     *      @OA\Response(response=423, description="Resource Locked"),
     *      @OA\Response(response=429, description="Too Many Requests"),
     *      @OA\Response(response=451, description="Unavailable For Legal Reasons"),
     *
     *      @OA\Response(response=500, description="Internal Server"),
     *      @OA\Response(response=502, description="Bad Gateway"),
     *      @OA\Response(response=503, description="Service Unavailable"),
     *      @OA\Response(response=504, description="Gateway Timeout"),
     *      @OA\Response(response=505, description="HTTP Version Not Supported"),
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *
     *
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     *
     *
     */
    /**
     *
     * PUT/PATCH /tags/{tag}
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $user_id = auth()->id();
        $validate_id = Validator::make(
            [
                'id' => $id,
            ],
            [
                'id' => ['required', 'numeric'],
            ]
        );

        if ($validate_id->fails())
        {
            $exception = $validate_id->messages();
            return response()->json( [
                "message" => "The given data was invalid.",
                "errors" => $validate_id->messages(),
            ], 422 );
        }

        $shop = Shop::findOrFail( $id );

        $validated = $request->validate(
            [
                'parent_id' => ['nullable', 'integer'],
                'name' => ['nullable', 'string', 'min:3'],
                'category_id' => ['nullable', 'integer', 'exists:categories,id'],
                'tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],
                'description' => ['nullable', 'string', 'min:5'],
                'shop_photo' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
                'type_location' => ['nullable', 'boolean'],
                'lat_location' => ['nullable', 'string', 'min:8'],
                'long_location' => ['nullable', 'string', 'min:8'],
                'shop_country' => ['nullable', 'string', 'min:8'],
                'shop_province' => ['nullable', 'string', 'min:8'],
                'shop_city' => ['nullable', 'string', 'min:8'],
                'shop_local' => ['nullable', 'string', 'min:8'],
                'shop_Street' => ['nullable', 'string', 'min:8'],
                'shop_alley' => ['nullable', 'string', 'min:8'],
                'shop_number' => ['nullable', 'string', 'min:8'],
                'shop_postal_code' => ['nullable', 'digits:10'],
                'shop_main_phone_number' => ['nullable', 'string', 'min:10', 'max:11'], // 09876543210  9876543210 11 or 10
            ]
        );

        $validator = Validator::make( $request->all()
//            [
//                'lat_location' => $request->lat_location,
//                'long_location' => $request->lat_location,
//                'type_location' => $request->type_location
//            ]
            ,
            [
                'lat_location' => ['required_unless:type_location,false'],
                'long_location' => ['required_unless:type_location,false'],
            ]
        );
        if ($validator->fails())
        {
            $exception = $validator->messages();
            return response()->json( [
                "message" => "The given data was invalid.",
                "errors" => $validator->messages(),
            ], 422 );
        }

        $shop->parent_id = $request->parent_id;
        $shop->name = $request->name;
        $shop->category_id = $request->category_id;

        $shop->description = $request->description;
//        $shop->shop_photo_url = $request->shop_photo;
        $shop->type_location = $request->type_location;
        $shop->lat_location = $request->lat_location;
        $shop->long_location = $request->long_location;
        $shop->shop_country = $request->shop_country;
        $shop->shop_province = $request->shop_province;
        $shop->shop_city = $request->shop_city;
        $shop->shop_local = $request->shop_local;
        $shop->shop_Street = $request->shop_Street;
        $shop->shop_alley = $request->shop_alley;
        $shop->shop_number = $request->shop_number;
        $shop->shop_postal_code = $request->shop_postal_code;
        $shop->shop_main_phone_number = $request->shop_main_phone_number;

        $shop->save();

        if ($file = $request->shop_photo)
        {
            $shop_photo_name =
                $request->file( 'shop_photo' )->getClientOriginalName();
            $format = (explode( '.', $shop_photo_name ));
            $file_name_is = $format[0];
            $file_format_is = end( $format );
            $name_in_store = $file_name_is . '-' . date( 'Y-m-d', strtotime( Carbon::now() ) ) . '.' . $file_format_is;

            $shop_photo_path = $request->file( 'shop_photo' )
                ->storeAs( 'shop_id/' . $shop->id . '_shop_name_' . $shop->name, $name_in_store );

            $shop->shop_photo_url = 'shop/' . $shop_photo_path;
            $resolution = getimagesize( $file )[3];

            $oldImagePoint = ShopImages::select( ['shop_image_index_point', 'shop_image_url'] )
                ->orderBy( 'shop_image_index_point', 'desc' )
                ->where( 'shop_id', '=', $id )
                ->first();
//            dd( $oldImagePoint );
            $imagePoint = $oldImagePoint;

            $imagePoint = $imagePoint->shop_image_index_point + 1;
//            $shop_image_url = $imagePoint->shop_image_url;
            $image = ShopImages::create(
                [
                    'shop_id' => $shop->id,
                    'shop_image_index_point' => $imagePoint,
                    'shop_image_url' => 'shop/' . $shop_photo_path,
                    'shop_image_type' => $file->getClientMimeType(),
                    'shop_image_format' => $file->guessClientExtension(),
                    'shop_image_size' => $file->getSize(),
                    'shop_image_resolution' => $resolution,
                    'shop_image_old_name' => $file->getClientOriginalName(),
                    'shop_image_new_name' => $name_in_store,
                    'shop_image_uploader_user_id' => $user_id,
                    'shop_image_accept_status' => 0,
                    'shop_image_active_status' => 1,
                    'shop_image_publish_status' => 1,
                    'shop_image_thumbnail_url' => null,
                    'shop_image_thumbnail_name' => null,
                ]
            );
//            $shop->shop_image_index_point = $imagePoint;
            $shop->save();
        }

        if (isset( $request->tag_ids ))
        {
            $tag_ids = $request->tag_ids;
            try
            {
                $shop->tags()->attach( $tag_ids, ['tag_accept_status' => 0] );
            }
            catch (QueryException $e)
            { // addd foregin key todo necessary
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062)
                {
                    return response()->json( [
                        'message' => 'shop updated. and tags are Duplicate entry',
                        'error' => [
                            'Duplicate entry. tags already inserted.',
                            $e->errorInfo[2],
                        ],
                        'data' => $shop,
                    ], 200 );
                }
            }
        }

        return response()->json( [
            'message' => 'shop updated.',
            'data' => $shop,
        ], 200 );


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
        // todo transaction delete all products, all services, all relationship
        // todo call other destroy function
    }

    public function getSelfShop(Request $request)
    {
        $shopkeeper_id = auth()->id();
//        dd($shopkeeper_id);
        $shop = Shop::whereHas( 'userOfRolesShopsUsers', function ($query) use ($shopkeeper_id) {
            $query->where( 'roles_shops_users.user_id', '=', $shopkeeper_id );
        } )
            ->with( 'userOfRolesShopsUsers' )
            ->with( 'roleOfRolesShopsUsers' )
            ->get();
    }

    /**************************/
    /**
     * @OA\Get(
     * path="/api/v1/shopImage/{id}",
     * operationId="get image of shops id",
     * tags={"Shops"},
     * summary="get Image of Shop by id in url. => for all user and shopkeeper and system admin",
     * description="get image of Shop by id in patch 'url'",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of image",
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
     * DELETE /tags/{tag}
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param int     $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function image(Request $request, $id)
    {
        // get shop image by id
        // validation id
        $shop = Shop::findOrFail( $id );
        $filePath = public_path() . '/' . $shop->shop_photo_url;

        /*        $content = file_get_contents( $filePath );
                $file_url = env('APP_URL')."/shop/" . $shop->shop_photo_url;
                $content = base64_encode($content);
                return response( $file_url , 201, [
                    'Content-Type' => 'application/json',
                ]);
                    ->headers->set(
                        'Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application'
                    );*/

        if (file_exists( $filePath ))
        {
            $type = File::mimeType( $filePath );
            $content = file_get_contents( $filePath );
            $response = response( $content, 200, [
                'Content-Type' => $type,
                'Content-Disposition' => 'attachment; filename="' . $shop->name . '.jpeg"',
            ] );
            return $response;
        }
        else
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

    }

    /***************************/

    /**
     * @OA\Get(
     * path="/api/v1/tagsShop/{id}",
     * operationId="get tag status of shops id",
     * tags={"Shops"},
     * summary="get tag status of Shop by id in url. => for system admin",
     * description="get tag status of Shop by id in patch 'url'",
     *
     *
     *
     *     @OA\Parameter(
     *         name="accept",
     *         in="query",
     *         description="Tags to stuats listing",
     *         required=false,
     *         example="",
     *         @OA\Schema(
     *           type="boolean",
     *         nullable=true,
     *         ),
     *         style="form"
     *     ),
     *
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of shop",
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
     * @param Request  $request
     * @param          $id
     * @return UltraTagShopStatusCollection|\Illuminate\Http\JsonResponse
     *
     *
     * @property mixed shop_id
     * @property mixed tag_accept_status_use
     *
     *
     *
     */
    public function tagsShopById(Request $request, $id)
    {
        $user = auth()->user();
        if ($user == $user)
//        if (($user->hasRole( 'admin', 'api' )) or ($user->hasRole( 'system', 'api' )))
        {

            if ($request->query( 'accept' ) == null)
            {
                $when = false;
            }
            else
            {
                $when = true;
            }
            $acceptStatus = filter_var( $request->query( 'accept' ), FILTER_VALIDATE_BOOLEAN );

//            dd($request->query( 'accept' ),$acceptStatus, $when);
            $tags = Tag::whereHas( 'shops', function ($query) use ($id, $request, $acceptStatus, $when) {
                $query->whereIn( 'shops_tags.shop_id', [$id] );
                $query->when( $when, function ($query) use ($acceptStatus) {
                    $query->where( 'shops_tags.tag_accept_status', (int) $acceptStatus );
                } );
            } )
                ->with( 'shops:id' )
                ->get();

            /**
             *
             * @var integer $item->shop_id
             * @property integer $item->shop_id
             * @type mixed   tag_accept_status_use
             */
            $val = $tags->map( function ($item) {
                /**
                 * @property integer $item->shop_id
                 * @var mixed $item->shop_id
                 */
                $item->shop_id = $item->shops[0]->id;
                $item->tag_accept_status_use = $item->shops[0]->pivot->tag_accept_status;
                unset( $item->shops );

                return $item;
            } );

            return new UltraTagShopStatusCollection( $val );
        }
        else
        {
            return response()->json(
                [
                    'message' => 'Forbidden.',
                    'error' => 'You can not access to resource.',
                ],
                403
            );
        }
    }
























    /************************************/

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

}


