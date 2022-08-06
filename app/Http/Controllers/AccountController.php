<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Controllers\Controller;
use App\Http\Resources\AccountCollection;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AccountController extends Controller
{

    /**
     * @OA\Get(
     * path="/api/v1/accounts",
     * operationId="newAccount",
     * tags={"Account"},
     * summary="create new account. => only for shopkeeper",
     * description="create new account",
     *
     *     @OA\Parameter(
     *         name="sort",
     *         in="query",
     *         description="Tags to sort by",
     *         required=false,
     *         example="id",
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         style="form"
     *     ),
     *
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="Tags to order by 'asc|desc'",
     *         required=false,
     *         example="asc",
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         style="form"
     *     ),
     *
     *
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Tags to paginate for page number",
     *         required=false,
     *         example="1",
     *         @OA\Schema(
     *           type="number",
     *         ),
     *         style="form"
     *     ),
     *
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="Tags for number of limit item in paginate result",
     *         required=false,
     *         example="10",
     *         @OA\Schema(
     *           type="number",
     *         ),
     *         style="form"
     *     ),
     *
     *
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="data of result",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="current_page", type="number", example="1"),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="11",
     *                      ),
     *                  ),
     *
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': ' Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/accounts?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/accounts"),
     *              @OA\Property(property="per_page", type="string", example="'10'"),
     *              @OA\Property(property="to", type="number", example="3"),
     *              @OA\Property(property="total", type="number", example="13"),
     *          ),
     *      ),
     *
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="data of result",
     *          description="data of result",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="current_page", type="number", example="1"),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="11",
     *                      ),
     *                  ),
     *
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/accounts?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/accounts"),
     *              @OA\Property(property="per_page", type="string", example="'10'"),
     *              @OA\Property(property="to", type="number", example="3"),
     *              @OA\Property(property="total", type="number", example="13"),
     *          ),
     *      ),
     *
     *
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=401, description="Unauthorized"),
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
     *     security={
     *         {"bearer": {}}
     *     },
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
        $page = $request->query('page');
        $limit = $request->query('limit');
        if ($request->query('sort')) {
            $sort = $request->query('sort');
        } else {
            $sort = 'id';
        }
        if ($request->query('order')) {
            $order = $request->input('order');
        } else {
            $order = 'asc';
        }

        $user = User::find(auth()->id());
        $user->guard_name = 'api'; // todo important

        $accounts = Account::where("user_id", "=", $user->id)
            ->paginate($limit, '*', 'page', $page);

        $accountCollection = (new accountCollection($accounts));

        return response()->json(
            [
                $accountCollection
            ],
            200);
    }

    /**
     * @OA\Get(
     * path="/api/v1/accounts",
     * operationId="newAccount",
     * tags={"Account"},
     * summary="create new account. => only for shopkeeper",
     * description="create new account",
     *
     *     @OA\Parameter(
     *         name="sort",
     *         in="query",
     *         description="Tags to sort by",
     *         required=false,
     *         example="id",
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         style="form"
     *     ),
     *
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="Tags to order by 'asc|desc'",
     *         required=false,
     *         example="asc",
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         style="form"
     *     ),
     *
     *
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Tags to paginate for page number",
     *         required=false,
     *         example="1",
     *         @OA\Schema(
     *           type="number",
     *         ),
     *         style="form"
     *     ),
     *
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="Tags for number of limit item in paginate result",
     *         required=false,
     *         example="10",
     *         @OA\Schema(
     *           type="number",
     *         ),
     *         style="form"
     *     ),
     *
     *
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="data of result",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="current_page", type="number", example="1"),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="11",
     *                      ),
     *                  ),
     *
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': ' Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/accounts?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/accounts"),
     *              @OA\Property(property="per_page", type="string", example="'10'"),
     *              @OA\Property(property="to", type="number", example="3"),
     *              @OA\Property(property="total", type="number", example="13"),
     *          ),
     *      ),
     *
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="data of result",
     *          description="data of result",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="current_page", type="number", example="1"),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="11",
     *                      ),
     *                  ),
     *
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                         property="account_name",
     *                         type="string",
     *                         example="account_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/accounts?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/accounts?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/accounts"),
     *              @OA\Property(property="per_page", type="string", example="'10'"),
     *              @OA\Property(property="to", type="number", example="3"),
     *              @OA\Property(property="total", type="number", example="13"),
     *          ),
     *      ),
     *
     *
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=401, description="Unauthorized"),
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
     *     security={
     *         {"bearer": {}}
     *     },
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
    public function findAll($id, Request $request): JsonResponse
    {
        $user = User::find(auth()->id());
        $user->guard_name = 'api'; // todo important


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

    /**
     * @OA\Post(
     * path="/api/v1/accounts",
     * operationId="newAccount",
     * tags={"Account"},
     * summary="create new account. => only for shopkeeper",
     * description="create new account",
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="New account Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="New account Created"),
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
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $user = User::find(auth()->id());
            $user->guard_name = 'api'; // todo important

            $validated = $request->validate(
                [
                    'account_name' => ['required', 'unique:accounts,account_name', 'string', 'min:3', 'max:255'],
                    'user_id' => ['numeric', 'nullable'],
                    'role_id' => ['numeric', 'nullable'],
                    'shop_id' => ['numeric', 'nullable'],
                ]
            );

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

            if (isset($validated['user_id'])) {
                if ($validated['user_id'] == $user->id) {
                    // todo add error
                    $validated['user_id'] = $user->id;
                } else {
                    // todo add error
                    $validated['user_id'] = $user->id;
                }
            } else {
                // todo add error
                $validated['user_id'] = $user->id;
            }

            // todo user->roles
            // admin
            if ($this->in_array_field(1, 'id', $user->roles)) {
                $validated_admin = Validator::make($validated,
                    [
                        'user_id' => ['required', 'numeric', 'nullable'],
                        'role_id' => ['required', 'numeric', 'nullable'],
                        'shop_id' => ['required', 'numeric', 'nullable'],
                    ]
                )->validate();

                $account = Account::create([
                    'account_name' => $validated['account_name'],
                    'user_id' => $validated_admin['user_id'],
                    'shop_id' => $validated_admin['shop_id'],
                    'role_id' => $validated_admin['role_id'],
                    'account_confirm_shopkeeper_id' => null,
                    'account_status_confirm_shopkeeper' => null,
                    'account_confirm_user_id' => $user->id,
                    'account_status_confirm_user' => true,
                    'account_active_at' => null,
                    'account_active_by_user_id' => null,
                    'account_unique_value' => Str::uuid()->toString()
                ]);

                $success['id'] = $account->id;
                $responseCode = 200;
                $message = 'New Account Created';
                $notifications_En_Server = 'New Account Created';
                $notifications_Fa_Server = 'اکانت جدید ایجاد شد';
            } // system
            elseif ($this->in_array_field(2, 'id', $user->roles)) {
                $validated_system = Validator::make($validated,
                    [
                        'user_id' => ['required', 'numeric', 'nullable'],
                        'role_id' => ['required', 'numeric', 'nullable'],
                        'shop_id' => ['required', 'numeric', 'nullable'],
                    ]
                )->validate();

                $account = Account::create([
                    'account_name' => $validated['account_name'],
                    'user_id' => $validated_system['user_id'],
                    'shop_id' => $validated_system['shop_id'],
                    'role_id' => $validated_system['role_id'],
                    'account_confirm_shopkeeper_id' => null,
                    'account_status_confirm_shopkeeper' => null,
                    'account_confirm_user_id' => $user->id,
                    'account_status_confirm_user' => true,
                    'account_active_at' => null,
                    'account_active_by_user_id' => null,
                    'account_unique_value' => Str::uuid()->toString()
                ]);

                $success['id'] = $account->id;
                $responseCode = 200;
                $message = 'New Account Created';
                $notifications_En_Server = 'New Account Created';
                $notifications_Fa_Server = 'اکانت جدید ایجاد شد';
            } // business_man
            elseif ($this->in_array_field(3, 'id', $user->roles)) {
                return response()->json(
                    [
                        "message" => "Forbidden",
                        "errors" => [
                            "problem" => [
                                "user can not make Account",
                            ],
                        ],
                    ],
                    403
                );
            } // shopkeeper
            elseif ($this->in_array_field(4, 'id', $user->roles)) {
                if (isset($validated['user_id'])) {
                    if ($validated['user_id'] == $user->id) {
                        // user make account for self
                        $account = Account::create([
                            'account_name' => $validated['account_name'],
                            'user_id' => $validated['user_id'],
                            'shop_id' => null,
                            'role_id' => 4,
                            'account_confirm_shopkeeper_id' => $user->id,
                            'account_status_confirm_shopkeeper' => true,
                            'account_confirm_user_id' => null,
                            'account_status_confirm_user' => true,
                            'account_active_at' => Carbon::now(),
                            'account_active_by_user_id' => $user->id,
                            'account_unique_value' => Str::uuid()->toString()
                        ]);

                        $success['id'] = $account->id;
                        $responseCode = 200;
                        $message = 'New Account Created';
                        $notifications_En_Server = 'New Account Created';
                        $notifications_Fa_Server = 'اکانت جدید ایجاد شد';
                    } else {
                        // user make account for another one
                        $validated_shopkeeper = Validator::make($validated,
                            [
                                'shop_id' => ['required', 'numeric', 'nullable'],
                            ]
                        )->validate();
                        $account = Account::create([
                            'account_name' => $validated['account_name'],
                            'user_id' => null,
                            'shop_id' => $validated_shopkeeper['shop_id'],
                            'role_id' => 4,
                            'account_confirm_shopkeeper_id' => null,
                            'account_status_confirm_shopkeeper' => null,
                            'account_confirm_user_id' => null,
                            'account_status_confirm_user' => true,
                            'account_active_at' => null,
                            'account_active_by_user_id' => null,
                            'account_unique_value' => Str::uuid()->toString()
                        ]);

                        $success['id'] = $account->id;
                        $responseCode = 200;
                        $message = 'New Account Created';
                        $notifications_En_Server = 'New Account Created';
                        $notifications_Fa_Server = 'اکانت جدید ایجاد شد';
                    }
                } else {
                    // make account for shop
                    $validated_shopkeeper_b = Validator::make($validated,
                        [
                            'shop_id' => ['required', 'numeric', 'nullable'],
                        ]
                    )->validate();
                    $account = Account::create([
                        'account_name' => $validated['account_name'],
                        'user_id' => null,
                        'shop_id' => $validated_shopkeeper_b['shop_id'],
                        'role_id' => 4,
                        'account_confirm_shopkeeper_id' => null,
                        'account_status_confirm_shopkeeper' => null,
                        'account_confirm_user_id' => null,
                        'account_status_confirm_user' => true,
                        'account_active_at' => null,
                        'account_active_by_user_id' => null,
                        'account_unique_value' => Str::uuid()->toString()
                    ]);

                    $success['id'] = $account->id;
                    $responseCode = 200;
                    $message = 'New Account Created';
                    $notifications_En_Server = 'New Account Created';
                    $notifications_Fa_Server = 'اکانت جدید ایجاد شد';
                }
            } // user
            elseif ($this->in_array_field(5, 'id', $user->roles)) {
                return response()->json(
                    [
                        "message" => "Forbidden",
                        "errors" => [
                            "problem" => [
                                "user can not make Account",
                            ],
                        ],
                    ],
                    403
                );
            } // customer
            elseif ($this->in_array_field(6, 'id', $user->roles)) {
                return response()->json(
                    [
                        "message" => "Forbidden",
                        "errors" => [
                            "problem" => [
                                "customer can not make Account",
                            ],
                        ],
                    ],
                    403
                );
            } // unknown
            else {
                return response()->json(
                    [
                        "message" => "Forbidden",
                        "errors" => [
                            "problem" => [
                                "you can not make Account",
                            ],
                        ],
                    ],
                    403
                );
            }

            return response()->json([
                'message' => $message,
                'success' => $success,
                'data' => $account,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode);
        } catch (MyException $exception) {
            return response()->json(
                [
                    "message" => "Forbidden",
                    "errors" => [
                        "problem" => [
                            "you can not make Account",
                        ],
                    ],
                ],
                403
            );
        }
    }

    /**
     *
     * get /tags/{tag}
     * Display the specified resource.
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function show($id, Request $request)
    {
        $account = Account::find($id);

        if ($account) {
            $Resource = new AccountResource($account);
            $Resource->toJson();
            $Response = $Resource->toResponse($request);
            $Response->setStatusCode(200);

            return $Response;
        } else {
//            new Response(['error' => "Category Not Found!"], [404], [null]);
            return response()->json(
                [
                    'errors' => [
                        'account' => "account Not Found!",
                    ],
                ],
                404
            );
        }
    }

    /**
     *
     * PUT/PATCH /tags/{tag}
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request)
    {

    }

    /**
     *
     * DELETE /tags/{tag}
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($id, Request $request)
    {

    }

    private function in_array_field($needle, $needle_field, $haystack, $strict = false)
    {
        if ($strict) {
            foreach ($haystack as $item)
                if (isset($item->$needle_field) && $item->$needle_field === $needle)
                    return true;
        } else {
            foreach ($haystack as $item)
                if (isset($item->$needle_field) && $item->$needle_field == $needle)
                    return true;
        }
        return false;
    }

}
