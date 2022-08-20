<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\AccountResource;
use App\Http\Resources\ShopCollection;
use App\Http\Resources\ShopResource;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Http\Resources\UltraTagShopStatusCollection;
use App\Models\Account;
use App\Models\RelationShop;
use App\Models\RolesShopsUsers;
use App\Models\Shop;

//use Auth;
use App\Models\ShopImages;
use App\Models\Tag;
use App\Models\User;
use App\Models\Work;
use App\Repositories\ShopRepositories;
use Carbon\Carbon;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;
use App\Traits\QueryParams;

//use Faker\Provider\Image;
//use Nette\Utils\Image;
//use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

/**
 *
 */
class ShopController extends Controller
{

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
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
//        return $request->attributes->all();
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

        $this->checkQueryParams($request);

        if ($request->query('longitude') and $request->query('latitude')) {
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

            if ($request->query('NWLongitude') or $request->query('NWLatitude')) {

                $validated_location_corner = $request->validate(
                    [
                        'NWLatitude' => ['required', 'required_with:NWLongitude', 'numeric', 'min:1'],
                        'NWLongitude' => ['required', 'required_with:NWLatitude', 'numeric', 'min:1'],
                        'zoom' => ['required_with:NWLatitude', 'required_with:NWLongitude', 'numeric', 'min:1'],
                    ]
                );

                $zoom = $validated_location_corner['zoom'];

                $top = (float)$validated_location_corner['NWLatitude'];
                $left = (float)$validated_location_corner['NWLongitude'];
                $bottom = $center_latitude + ($center_latitude - $top);
                $right = $center_longitude + ($center_longitude - $left);

                $shops = Shop::orderBy($this->sort, $this->order)
//                    ->whereBetween( 'lat_location', [$top, $bottom] )
//                    ->whereBetween( 'long_location', [$left, $right] )
//                    ->where('shop_accept_status', '=', 1)
//                    ->where('shop_Priority', '<=', $zoom) // todo (notice : mehdi) top level number small, low level number biggest, shop_Priority = 'اولویت'
                    ->where('lat_location', '<=', $top)
                    ->where('lat_location', '>=', $bottom)
                    ->where('long_location', '<=', $left)
                    ->where('long_location', '>=', $right)
                    ->paginate($this->limit, '*', 'page', $this->page);

                $ShopCollection = (new ShopCollection($shops));
                $ShopCollection->toJson();
                $Response = $ShopCollection->toResponse($request);
                $Response->setStatusCode(200);

                return $Response;

            }
            elseif ($request->query('radius')) {
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
            ) AS distance', [$center_latitude, $center_longitude, $center_latitude])
//            ->where('shop_accept_status', '=', 1)
//            ->where('shop_level_in_map', '>', 12) // todo zoom > value => shops -> more
                    ->having("distance", "<", $radius) // $radius meter
                    ->orderBy('distance', 'asc')
                    ->limit($this->limit)
//                    ->offset(0)
//                    ->get();
//                    ->toSql();
                    ->paginate($this->limit, '*', 'page', $this->page);


//                $query = DB::getQueryLog();
//                $query = end($query);
//                dd($query);

                $ShopCollection = (new ShopCollection($shop));
                $ShopCollection->toJson();
                $Response = $ShopCollection->toResponse($request);
                $Response->setStatusCode(200);
                return $Response;
            }
            else {
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
        else {
            $shops = Shop::orderBy($this->sort, $this->order)
//                ->where( 'shop_accept_status', '=', 1 )
                ->paginate($this->limit, '*', 'page', $this->page);

            return response()->json(
                new ShopCollection
                ($shops)
                , 200);
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
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function store(Request $request): JsonResponse
    {
        $attributes = $request->attributes->all();
//  need add identify ID look like telegram nullable and generation uniq number for add to parent
        try {
            $shopkeeper_id = auth()->id();
            if (auth()->user()->disable_at != null) {
                return response()->json([
                    "message" => "Forbidden",
                    "errors" => [
                        "problem" => [
                            "No account with this profile was found.",
                        ],
                        'NotificationsEnServer' => "Your account has been deactivated. You are not allowed to register a shop.",
                        'NotificationsFaServer' => "اکانت شما غیرفعال شده است. شما اجازه ثبت فروشگاه ندارید.",
                    ],
                ], 403);
            }
            else if (auth()->user()->deleted_at != null) {
                return response()->json([
                    "message" => "Resource Not Found",
                    "errors" => [
                        "problem" => [
                            "No account with this profile was found.",
                        ],
                        'NotificationsEnServer' => "No account with this profile was found.",
                        'NotificationsFaServer' => "کاربری با این مشخصات پیدا نشد.",
                    ],
                ], 404);
            }// mobile_verified_at,

            // todo added   ' shop_Priority '   default 12 => بی اهمیت
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

            if ($validated['registration_type'] == "store") {
                // normal

                $parent_shop_id = null; // todo remove
                $parent_account_id = null; // todo remove

                $child_account_id = $attributes['account_id'];
                $child_user_id = $attributes['user_id'];
                $child_role_id = $attributes['role_id'];
                $child_shop_id = $attributes['shop_id'];
            }
            elseif ($validated['registration_type'] == "search") {
                $validator_registration = Validator::make($validated, [
                    'parent_id' => [
                        'required',
                        'integer',
                        'required_unless:registration_type,search',
                        'exists:shops,id'
                    ],
                ]);

                if ($validator_registration->fails()) {
                    $exception = $validator_registration->messages();
                    return response()->json([
                        "message" => "The given data was invalid.",
                        "errors" => $validator_registration->messages(),
                    ], 422);
                }

                $parent_shop_id = $validator_registration->attributes()['parent_id'];
                $parent_account_id = null; // todo remove

                $child_account_id = $attributes['account_id'];
                $child_user_id = $attributes['user_id'];
                $child_role_id = $attributes['role_id'];
                $child_shop_id = $attributes['shop_id'];

            }
            elseif ($validated['registration_type'] == "qrcode") {
                $validator_registration = Validator::make($validated, [
                    'parent_id' => [
                        'required',
                        'integer',
                        'required_unless:registration_type,search',
                        'exists:shops,id',
                    ],
                    'account_id' => [
                        'required',
                        'integer',
                        'required_unless:registration_type,qrcode',
                        'exists:accounts,id',
                        'not_in:' . $attributes['account_id']
                    ],
                ],
                    [
                        'account_id.not_in' => 'It is not possible to register yourself as your own subset.',
                    ]
                );

                if ($validator_registration->fails()) {
                    $exception = $validator_registration->messages();
                    return response()->json([
                        "message" => "The given data was invalid.",
                        "errors" => $validator_registration->messages(),
                    ], 422);
                }

                $parent_shop_id = $validator_registration->attributes()['parent_id'];
                $parent_account_id = $validator_registration->attributes()['account_id'];

                $child_account_id = $attributes['account_id'];
                $child_user_id = $attributes['user_id'];
                $child_role_id = $attributes['role_id'];
                $child_shop_id = $attributes['shop_id']; // todo mehdi new insert

            }
            else {
                // return exception // todo mehdi
                return response()->json([
                    "message" => "The given data was invalid.",
                    "errors" => [
                        "registration_type" => "registration_type is not valid!",
//                        "messages" => $validated->messages(),

                    ],
                ], 422);
            }

            if (count(array_intersect([66, 68, 70, 72, 79, 81, 83, 85], $validated['shop_work_ids'])) === 0) {
                // No values from array1 are in array 2
                $shop_parent_able_request = false;
                $shop_parent_able_status = false;
            }
            else {
                // There is at least one value from array1 present in array2
                $shop_parent_able_request = true;
                $shop_parent_able_status = true;
            }

            /*            return
                            [
                                $validator_registration->attributes(),
                                'parent_shop_id' => $parent_shop_id,
                                'child_shop_id' => $child_shop_id,
                                'child_account_id' => $child_account_id,
                                'parent_account_id' => $parent_account_id,
                                'child_user_id' => $child_user_id,
                                'child_role_id' => $child_role_id,
                            ];*/
            /**
             * if type_location = false => location is dynamic
             * if type_location = true => location is static
             *
             */
            if ($validated['type_location'] == true) {
                $validator = Validator::make($validated, [
                    'lat_location' => ['required_unless:type_location,false', 'min:6'],
                    'long_location' => ['required_unless:type_location,false', 'min:6'],
//                    'locations' => [ // todo mehdi not worked
//                        'nullable',
//                        'size:0',
//                        'array'
//                    ],
                ]);

                if ($validator->fails()) {
                    $exception = $validator->messages();
                    return response()->json([
                        "message" => "The given data was invalid.",
                        "errors" => $validator->messages(),
                    ], 422);
                }
            }
            elseif ($validated['type_location'] == false) { //todo validation return true
                $validator = Validator::make($validated, [
                    'locations' => [
                        'required',
                        'required_unless:type_location,true',
                        'min:3',
                        'max:5',
                    ],
                ]);

                if ($validator->fails()) {
                    $exception = $validator->messages();
                    return response()->json([
                        "message" => "The given data was invalid.",
                        "errors" => $validator->messages(),
                    ], 422);
                }
            }

            if (isset($validated['shop_priority'])) {
                if ($validated['shop_priority'] == null) {
                    $validated['shop_priority'] = 12;
                }
            }
            else {
                $validated['shop_priority'] = 12;
            }

            // after insert shop
            if ($validated['shop_work_ids']) {
                // select work and insert into shop works
                // select work access and insert into access_shop shop multi_access

                $works = work::whereIn('id', $validated['shop_work_ids'])
                    ->with(['accesses' => function ($query) {
                        $query->select(['id',
                            'work_id',
                            'work_name',
                            'work_title',
                            'access_id',
                            'access_title']);
                    }])
                    ->select(['id', 'subcategory_id', 'subcategory_name', 'title AS work_title', 'type_location'])
                    ->get();

                $work_list = collect($works)->map(
                    function ($items) {
                        return collect($items)->except(['accesses']);
                    }
                )->toArray();


                $accesses = collect($works)->map(
                    function ($items) {
                        return $items->accesses
                            ->map(
                                function ($item) {
                                    return collect($item)->only('access_id', 'access_title');
                                }
                            );
                    }
                );
                $access_list = $accesses->collapse()->unique('access_id');

                // todo mehdi this business need to edit
                // check if type location is false remove accesses "x" from access_lis
//                foreach ($work_list as $work) {
//                    if ($work['type_location'] == 0) {
//                        return true;
//                    }
//                }
            }
            else {
                return response()->json([
                    "message" => "shop_work_ids is not empty", // Forbidden
                    "errors" => [
                        "shop_work_ids" => [
                            "shop_work_ids is not empty",
                        ],
                        'NotificationsEnServer' => "shop_work_ids is not empty",
                        'NotificationsFaServer' => "حداقل یکی از دسته بندی ها باید انتخاب شود.",
                    ],
                ], 422);
            }

            // todo mehdi this business need to edit
            // check is dynamic false
//            if (((($access_list)->whereIn('access_id', [4, 5, 6]))->all()) != null) {
//                // is dynamic
//                return true;
//            }

            //////////////////////////////////////////////////
            ///
            /*            return [
                            'resulte' => [
                                'child_account_id' => $child_account_id,
                                'child_user_id' => $child_user_id,
                                'child_role_id' => $child_role_id,
                                'child_shop_id' => $child_shop_id,
                                'parent_shop_id' => $parent_shop_id,
                                'parent_account_id' => $parent_account_id,
                                'validated' => $validated,
                                'works' => $works,
                                'work_list' => $work_list,
                                'accesses' => $accesses,
                                'access_list' => $access_list,

                            ],
                        ];*/

            $shop = Shop::create(
                [
                    "name" => $validated['name'],
                    "description" => $validated['description'],
                    "shop_priority" => $validated['shop_priority'],
                    "shop_accept_status" => null,
                    "shop_photo_url" => null,
                    "type_location" => $validated['type_location'],
                    "lat_location" => $validated['lat_location'],
                    "long_location" => $validated['long_location'],
                    "shop_country" => $validated['shop_country'],
                    "shop_province" => $validated['shop_province'],
                    "shop_city" => $validated['shop_city'],
                    "shop_local" => $validated['shop_local'],
                    "shop_street" => $validated['shop_street'],
                    "shop_alley" => $validated['shop_alley'],
                    "shop_number" => $validated['shop_number'],
                    "shop_parent_able_status" => $shop_parent_able_status,
                    "shop_parent_able_request" => $shop_parent_able_request,
                    "shop_postal_code" => $validated['shop_postal_code'],
                    "shop_main_phone_number" => $validated['shop_main_phone_number'],
                    "additional_user_id" => $shopkeeper_id,
                    "shop_number_likes" => 0,
                    "normal_product_number_likes" => 0,
                ]
            );
            // $shop->id;

            $res_work = collect($work_list)->keyBy('id')->map(
                function ($items) use ($shop) {
                    return [
                        'subcategory_id' => $items['subcategory_id'],
                        'subcategory_name' => $items['subcategory_name'],
                        'work_title' => $items['work_title'],
                        'shop_id' => $shop->id,
                        'shop_name' => $shop->name,
                        'shops_works_accept_status' => null,
                        'shops_works_publish_status' => null,
                        'shops_works_show_status' => null,
                        'shops_works_confirm_user_id' => null,
                        'shops_works_confirm_comment_id' => null,
                        'shops_works_confirm_comment_value' => null,
                    ];
                }
            );
            // insert into shop_multi_categories tbl => shop_work
            //  $shop->works()->sync($res);
            $shop->works()->attach($res_work); // attach($res_work, ['' => ])

            $res_access = collect($access_list)->keyBy('access_id')->map(
                function ($items) use ($shop) {
                    return [
                        'access_id' => $items['access_id'],
                        'access_title' => $items['access_title'],
                        'shop_id' => $shop->id,
                        'shop_name' => $shop->name,
                        'start_access_time' => null,
                        'end_access_time' => null,
                        'length_access_time' => null,
                        'history_of_activated_number' => 1,
                        'access_shop_option_status' => null,
                        'access_shop_accept_status' => null,
                        'access_shop_publish_status' => null,
                        'access_shop_show_status' => null,
                        'access_shop_confirm_user_id' => null,
                        'access_shop_confirm_comment_id' => null,
                        'access_shop_confirm_comment_value' => null,
                    ];
                }
            );
            // insert into shop access tbl => access_shop // 4 5 6
            $shop->access()->attach($res_access); // attach($res_access, ['' => ])

            if (isset($validated['tag_ids'])) {
                $tag_ids = $validated['tag_ids'];
                $shop->tags()->attach($tag_ids, ['tag_accept_status' => null]);
            }

            // after insert shop
            if ($validated['shop_photo_ids']) {
                $files = ShopImages::whereIn('id', $validated['shop_photo_ids'])
                    ->update(['shop_id' => $shop->id]);
                // update ShopImages -> shop_id
                // shop_photo_url in tbl shop select first $files->shop_image_url
                // $shop->images()->saveMany($files);
            }

//            return $shop;
            // after insert in shop tbl -> insert relation in relation tbl
            if ($validated['registration_type'] == 'search') {
                // todo mehdi make new relation
                $shop->parents()->create(
                    [
                        'type_shop_top' => 'owner',
                        'type_shop_bottom' => 'client',
                        'type_top_between_bottom' => 'test_platform', // get from parent shop
                    ]
                );
//                $parentShop = RelationShop::create(
//                    [
//                    ]
//                );
                // todo mehdi make update child account
                $account = Account::findOrFail($child_account_id)->update(['shop_id' => $shop->id]);
//                $account = Account::where(['id', '=', $child_account_id]
//                );

                return response()->json([
                    "message" => $shop,
                ], 201);
//                return new AccountResource($account);
//                return $account;
            }

            /**
             * shop accept status default false => not accepted by admin
             *
             * @var boolean $validated
             * @lang shop_accept_status
             *
             * @property mixed name
             *
             */
//            $shop = Shop::create(
//                [
////                    'parent_id' => null,
//                    'name' => $request->name,
//                    'category_id' => $request->category_id,
//                    'description' => $request->description,
//                    'shop_accept_status' => null,
////                    'shop_photo_url' => $request->shop_photo,
//                    'type_location' => $request->type_location,
//                    'lat_location' => $request->lat_location,
//                    'long_location' => $request->long_location,
//                    'shop_country' => $request->shop_country,
//                    'shop_province' => $request->shop_province,
//                    'shop_city' => $request->shop_city,
//                    'shop_local' => $request->shop_local,
//                    'shop_Street' => $request->shop_Street,
//                    'shop_alley' => $request->shop_alley,
//                    'shop_number' => $request->shop_number,
//                    'shop_postal_code' => $request->shop_postal_code,
//                    'shop_main_phone_number' => $request->shop_main_phone_number,
//                ]
//            );

//            model has role
            $success['id'] = $shop->id;
            /*            if ($request->input('shop_photo')) {
                            $file = $validated['shop_photo'];
                            $shop_photo_name = $request->file('shop_photo')->getClientOriginalName();
                            $format = (explode('.', $shop_photo_name));
                            $file_name_is = $format[0];
                            $file_format_is = end($format);
                            $name_in_store = $file_name_is . '-' . date('Y-m-d', strtotime(Carbon::now())) . '.' . $file_format_is;

                            $shop_photo_path = $request->file('shop_photo')
                                ->storeAs('shop_id/' . $shop->id . '_shop_name_' . $shop->name, $name_in_store);

                            $shop->shop_photo_url = 'shop/' . $shop_photo_path;
                            $shop->save();
                            $resolution = getimagesize($file)[3];

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
                        }*/
            // todo $shop->id and $tag_ids insert to pivot table

//            $shop->tags()->sync($tag_ids, ['tag_accept_status' => 0]);

            // user_id => ($shopkeeper_id), role_id => (shopkeeper), shop_id => ($shop->id), shop_type => (child)
            // $shop->tags()->attach($tag);

            if (!$validated) {
                return response()->json([
                    "message" => "Unknown server problem",
                    "errors" => [
                        "problem" => [
                            "Unknown server problem",
                        ],
                    ],
                ], 503);
            }
            auth()->user()->guard_name = 'api';
            auth()->user()->assignRole('shopkeeper');
            $shop->userOfRolesShopsUsers()->attach($shopkeeper_id, ['shop_type' => 'child', 'role_id' => 1]);

            $responseCode = 201;
            $message = 'New Shop Created';
            $notifications_En_Server = 'New Shop Created';
            $notifications_Fa_Server = 'فروشگاه جدید ایجاد شد. و منتظر تایید مدیر میباشد.';

            return response()->json([
                'message' => $message,
                'success' => $success,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode);

        }
        catch (MyException $exception) //        catch (ShopStoreException $exception)
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
     * @param ShopRepositories $shops
     * @return JsonResponse
     */
    public function show(int $id, ShopRepositories $shops)
    {
//        auth::guard('api');
        DB::enableQueryLog();
        $shopkeeper_id = auth()->id();
        $shop = new ShopResource($shops->getByShopId($id));

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
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
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

        if ($validate_id->fails()) {
            $exception = $validate_id->messages();
            return response()->json([
                "message" => "The given data was invalid.",
                "errors" => $validate_id->messages(),
            ], 422);
        }

        $shop = Shop::findOrFail($id);

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

        $validator = Validator::make($request->all()
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
        if ($validator->fails()) {
            $exception = $validator->messages();
            return response()->json([
                "message" => "The given data was invalid.",
                "errors" => $validator->messages(),
            ], 422);
        }

        $shop->parent_id = $request->parent_id;
        $shop->name = $request->name;
        $shop->shop_category_id = $request->category_id;

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

        if ($file = $request->shop_photo) {
            $shop_photo_name =
                $request->file('shop_photo')->getClientOriginalName();
            $format = (explode('.', $shop_photo_name));
            $file_name_is = $format[0];
            $file_format_is = end($format);
            $name_in_store = $file_name_is . '-' . date('Y-m-d', strtotime(Carbon::now())) . '.' . $file_format_is;

            $shop_photo_path = $request->file('shop_photo')
                ->storeAs('shop_id/' . $shop->id . '_shop_name_' . $shop->name, $name_in_store);

            $shop->shop_photo_url = 'shop/' . $shop_photo_path;
            $resolution = getimagesize($file)[3];

            $oldImagePoint = ShopImages::select(['shop_image_index_point', 'shop_image_url'])
                ->orderBy('shop_image_index_point', 'desc')
                ->where('shop_id', '=', $id)
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

        if (isset($request->tag_ids)) {
            $tag_ids = $request->tag_ids;
            try {
                $shop->tags()->attach($tag_ids, ['tag_accept_status' => 0]);
            }
            catch (QueryException $e) { // addd foregin key todo necessary
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    return response()->json([
                        'message' => 'shop updated. and tags are Duplicate entry',
                        'error' => [
                            'Duplicate entry. tags already inserted.',
                            $e->errorInfo[2],
                        ],
                        'data' => $shop,
                    ], 200);
                }
            }
        }

        return response()->json([
            'message' => 'shop updated.',
            'data' => $shop,
        ], 200);


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
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        // todo transaction delete all products, all services, all relationship
        // todo call other destroy function
    }

    public function getSelfShop(Request $request)
    {
        $shopkeeper_id = auth()->id();
//        dd($shopkeeper_id);
        $shop = Shop::whereHas('userOfRolesShopsUsers', function ($query) use ($shopkeeper_id) {
            $query->where('roles_shops_users.user_id', '=', $shopkeeper_id);
        })
            ->with('userOfRolesShopsUsers')
            ->with('roleOfRolesShopsUsers')
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
     * @param int $id
     * @return JsonResponse
     */
    public function image(Request $request, int $id): JsonResponse
    {
        // get shop image by id
        // validation id
        $shop = Shop::findOrFail($id);
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

        if (file_exists($filePath)) {
            $type = File::mimeType($filePath);
            $content = file_get_contents($filePath);
            $response = response($content, 200, [
                'Content-Type' => $type,
                'Content-Disposition' => 'attachment; filename="' . $shop->name . '.jpeg"',
            ]);
            return $response;
        }
        else {
            return response()->json([
                "message" => "Unknown server problem",
                "errors" => [
                    "problem" => [
                        "Unknown server problem",
                    ],
                ],
            ], 503);
        }

    }

    /**
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function shopFile(Request $request)
    {
        if ($request->file('shop_photo')) {
            $validated = $request->validate(
                [
                    'shop_photo' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
                ]
            );
            $file = $validated['shop_photo'];
//            $shop_photo['guessClientExtension'] = $file->guessClientExtension();
            $format = (explode('.', $file->getClientOriginalName()));
            $file_name_is = $format[0];
            $file_format_is = end($format);
            $name_in_store = date('Y-m-d-H_m_s', strtotime(Carbon::now())) . '_s_' . rand(10, 99) . '-' . $file_name_is . '.' . $file_format_is;
            $shop_photo_path = $file
                ->storeAs('shop_files', $name_in_store);
            $shop_photo_url = 'shop/' . $shop_photo_path;

            $data = [
                'shop_image_url' => $shop_photo_url,
                'shop_image_type' => $file->getClientMimeType(),
                'shop_image_format' => $file->getClientOriginalExtension(),
                'shop_image_size' => $file->getSize(),
                'shop_image_resolution' => getimagesize($file)[0] . '*' . getimagesize($file)[1],
                'shop_image_old_name' => $file->getClientOriginalName(),
                'shop_image_new_name' => $name_in_store,
                'shop_image_uploader_user_id' => auth()->id(),
                'shop_image_accept_status' => null,
                'shop_image_active_status' => true,
                'shop_image_publish_status' => true,
                'shop_image_thumbnail_url' => null,
                'shop_image_thumbnail_name' => null,
            ];

            $image = ShopImages::create(
                $data
            );
            return $image;
        }
        else {
            return 'not valid';
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
     * @param Request $request
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
        if ($user == $user) // if (($user->hasRole( 'admin', 'api' )) or ($user->hasRole( 'system', 'api' )))
        {

            if ($request->query('accept') == null) {
                $when = false;
            }
            else {
                $when = true;
            }
            $acceptStatus = filter_var($request->query('accept'), FILTER_VALIDATE_BOOLEAN);

//            dd($request->query( 'accept' ),$acceptStatus, $when);
            $tags = Tag::whereHas('shops', function ($query) use ($id, $request, $acceptStatus, $when) {
                $query->whereIn('shops_tags.shop_id', [$id]);
                $query->when($when, function ($query) use ($acceptStatus) {
                    $query->where('shops_tags.tag_accept_status', (int)$acceptStatus);
                });
            })
                ->with('shops:id')
                ->get();

            /**
             *
             * @var integer $item ->shop_id
             * @property integer $item ->shop_id
             * @type mixed   tag_accept_status_use
             */
            $val = $tags->map(function ($item) {
                /**
                 * @property integer $item ->shop_id
                 * @var mixed $item ->shop_id
                 */
                $item->shop_id = $item->shops[0]->id;
                $item->tag_accept_status_use = $item->shops[0]->pivot->tag_accept_status;
                unset($item->shops);

                return $item;
            });

            return new UltraTagShopStatusCollection($val);
        }
        else {
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


