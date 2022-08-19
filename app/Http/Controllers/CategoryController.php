<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\WorkCollection;
use App\Models\Category;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class CategoryController extends Controller
{


    /**
     * @OA\Get(
     * path="/api/v1/shop/categories",
     * operationId="get categories",
     * tags={"Category for shops"},
     * summary="get all categories. => for shopkeeper and system admin",
     * description="get all categories",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': ' Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function findAll(Request $request)
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

//        dd($sort,$order);
//        $user = User::find( auth()->id() );
//        $user->guard_name = 'api'; // todo important for role

        $user = auth()->user();
        $user_id = $user->id;

//        return [$user->hasRole( 'shopkeeper', 'api' )];
//        return [$user->hasRole( 'system', 'api' )];


        $category = Category::orderBy($sort, $order)
//            ->where('parent_id', '=', null)
            ->when($user->hasRole('system', 'api'), function ($query) use ($user_id) {
                return $query
                    ->Where('shop_category_accept_status', true)
                    ->orWhere('shop_category_accept_status', false)
                    ->orWhere('shop_category_accept_status', null);
            })
            ->when($user->hasRole('shopkeeper', 'api'), function ($query) use ($user_id) {
                return $query
                    ->select('id',
                        'parent_id',
                        'shop_category_name',
                        'shop_category_accept_status',
                        'shop_category_publish_status',
                        'shop_category_show_status',
                        'shop_category_additional_user_id')
                    ->Where('shop_category_accept_status', true)
                    ->where('parent_id', '=', null)
                    ->orWhere(function ($subQuery) use ($user_id) {
                        $subQuery
                            ->where('shop_category_accept_status', false)
                            ->Where('shop_category_additional_user_id', $user_id)
                            ->Where('shop_category_publish_status', true)
                            ->orWhere('shop_category_publish_status', null);
                    });
            })
            ->when($user->hasRole('user', 'api'), function ($query) use ($user_id) {
                return $query
                    ->select('id', 'shop_category_name')
                    ->Where('shop_category_accept_status', true)
                    ->where('shop_category_publish_status', true)
                    ->where('shop_category_show_status', true);
            })
            ->paginate($limit, '*', 'page', $page);

        $CategoryCollection = (new CategoryCollection($category));
        return response()->json(
            [
                $CategoryCollection
            ], 200
        );

//        $CategoryCollection->toJson();
//        $Response = ($CategoryCollection)->toResponse( $request );
//        $Response->setStatusCode( 200 );
//        return $Response;
    }


    /**
     * @OA\Get(
     * path="/api/v1/shop/categories/{id}",
     * operationId="get categories id",
     * tags={"Category for shops"},
     * summary="get Category by id in url. => for shopkeeper and system admin",
     * description="get Category by id in patch 'url'",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     *
     */
    /**
     * @param Request $request
     * @param         $id
     */
    public function findById(Request $request, $id)
    {
        // todo mehdi category find by id
//        dd($request, $id);
        $category = Category::find($id);
//        CategoryResource::collection( $category );

        if ($category) {
            $Resource = new CategoryResource($category);
            $Resource->toJson();
            $Response = $Resource->toResponse($request);
            $Response->setStatusCode(200);

            return $Response;
        } else {
//            new Response(['error' => "Category Not Found!"], [404], [null]);
            return response()->json(
                [
                    'errors' => [
                        'shop_category' => "Shop Category Not Found!",
                    ],
                ],
                404
            );
        }

        /*        return response()->json(
                    [
        //                'data' => $category,
        //                'data' => $collection,
                        'data' => $Resource,
                    ],
                    200
                );*/
    }

    /**
     * @OA\Get(
     * path="/api/v1/shop/category/{id}/subcategories",
     * operationId="get subcategories with category id",
     * tags={"Category for shops"},
     * summary="get SubCategory by id in url. => for shopkeeper and system admin",
     * description="get SubCategory by id in patch 'url'",
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
     *         example="2",
     *     ),
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
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
     *                         property="category_name",
     *                         type="string",
     *                         example="category_name",
     *                      ),
     *                      @OA\Property(
     *                         property="id",
     *                         type="integer",
     *                         example="12",
     *                      ),
     *                  ),
     *
     *              ),
     *              @OA\Property(property="first_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=1"),
     *              @OA\Property(property="last_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=5"),
     *              @OA\Property(property="last_page", type="number", example="5"),
     *              @OA\Property(property="from", type="number", example="1"),
     *              @OA\Property(
     *                  property="links",
     *                  example="{'url': null,'label': '&laquo; Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next &raquo;','active': false}",
     *
     *
     *
     *
     *              ),
     *              @OA\Property(property="next_page_url", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories?page=2"),
     *              @OA\Property(property="prev_page_url", type="string", example="null"),
     *              @OA\Property(property="path", type="string", example="http://127.0.0.1:8001/api/v1/shop/categories"),
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
     *
     */
    /**
     * @param Request $request
     * @param         $id
     */
    public function findAllSub(Request $request, $id)
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

        $category = Category::where("parent_id", "=", $id)
            ->paginate($limit, '*', 'page', $page);

        $CategoryCollection = (new CategoryCollection($category));

        return response()->json(
            [
                $CategoryCollection
            ],
            200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $paginate = 25;
        $relations = null;

//        return CategoryResource::collection( Category::with( $relations )->paginate( $paginate ) );
        return response()->json(
            [

            ], 200
        );
    }

    /**
     * @OA\Post(
     * path="/api/v1/shop/categories",
     * operationId="newCategory",
     * tags={"Category for shops"},
     * summary="create new category. => only for system admin",
     * description="create new category",
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"category_name"},
     *               @OA\Property(
     *                  property="category_name",
     *                  type="string",
     *                  example="category name",
     *                  format="string",
     *                  description="category name",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *         ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"category_name"},
     *               @OA\Property(
     *                  property="category_name",
     *                  type="string",
     *                  example="category name",
     *                  format="string",
     *                  description="category name",
     *               ),
     *
     *
     *
     *            ),
     *        ),
     *    ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
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
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        try {
            $validated = $request->validate(
                [
                    'category_name' => ['required', 'string', 'min:3'],
                    'category_parent_id' =>
                        [
                            'required',
                            'exists:shop_categories,parent_id',
//                            Rule::exists('shop_categories.parent_id')
//                                ->where(function ($que) use (category_parent_id) {
//                                    return $que->where();
//
//                                })
                        ],
                    'category_image_url' => ['string', 'nullable'],

                    'category_accept_status' => ['string', 'nullable'],
                    'category_publish_status' => ['string', 'nullable'],
                    'category_show_status' => ['string', 'nullable'],
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

            if (isset($validated['category_image_url'])) {
                $category_image_url = $validated['category_image_url'];
            } else {
                $category_image_url = null;
            }

            $user = User::find(auth()->id());
            $user->guard_name = 'api'; // todo important

//            $all_roles_in_database = Role::all()->pluck( 'name' );
//            $user->assignRole('system');
//            $user->removeRole('system');
//            dd(
//                $all_roles_in_database,
//                $user->getRoleNames(),
//                $user->getAllPermissions(),
//                $user->getDirectPermissions()
//            );

            /*
                        $userGetRoleNames = $user->getRoleNames();

                        if ($userGetRoleNames->count() > 1){
            //                error
                            $category_additional_user_type = 'unknown';
                        } else {
                            $category_additional_user_type = $userGetRoleNames->toArray()[0];
                        }


                        if ($user->hasRole( 'shopkeeper' ))
                        {
                            $category_accept_status = false;
                            $category_publish_status = false;
                            $category_show_status = 'private';
                        }
                        elseif ($user->hasRole( 'system' ))
                        {
                            $category_accept_status = true;
                            $category_publish_status = true;
                            $category_show_status = 'public';
            //            } elseif ($user->hasRole('user')) {
            //                $category_additional_user_type = 'user';
            //                $category_accept_status = false;
            //                $category_publish_status = false;
            //                $category_show_status = 'privet';
                        }
                        else
                        {
                            $category_additional_user_type = 'unknown';
                            $category_accept_status = false;
                            $category_publish_status = false;
                            $category_show_status = 'privet';
                        }
            */


            $category_statuses = $this->category_status_result($user);
            $category = Category::create([
                'shop_category_name' => $validated['category_name'],
                'parent_id' => $validated['category_parent_id'],
                'shop_category_image_url' => $category_image_url,
                'shop_category_additional_user_id' => auth()->id(),
                'shop_category_additional_user_type' => $category_statuses['category_additional_user_type'],
                'shop_category_accept_status' => $category_statuses['category_accept_status'],
                'shop_category_publish_status' => $category_statuses['category_publish_status'],
                'shop_category_show_status' => $category_statuses['category_show_status'],

            ]);
            $success['id'] = $category->id;

            $responseCode = 201;
            $message = 'New Category Created';
            $notifications_En_Server = 'New Category Created';
            $notifications_Fa_Server = 'دسته بندی جدید ایجاد شد';

            return response()->json([
                'message' => $message,
                'success' => $success,
                'data' => $category,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode);
        } catch (MyException $exception) {

        }


        //
//        dd( $request );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return CategoryResource
     */
    public function show(Category $category)
    {
        //
        $category = null;
        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Category $category
     * @return void
     */
    public function edit(Request $request, Category $category)
    {
        //
    }

    /**
     * @OA\Put(
     * path="/api/v1/shop/categories/{id}",
     * operationId="updateCategory",
     * tags={"Category for shops"},
     * summary="update category. => only for system admin",
     * description="update category",
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
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"category_name"},
     *               @OA\Property(property="category_name", type="string", example="category name", format="string", description="category name"),
     *          ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"category_name"},
     *               @OA\Property(property="category_name", type="string", example="category name", format="string", description="category name"),
     *
     *            ),
     *        ),
     *    ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
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
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
//        try
//        {
//
//        }
        $user = User::find(auth()->id());
        $user->guard_name = 'api'; // todo important

        $category_statuses = $this->category_status_result($user);

        $validated = $request->validate(
            [
                'category_name' => ['required', 'string', 'min:3'],
            ]
        );
        $validator = Validator::make($validated, [
            'category_name' => ['string', 'unique:shop_categories,shop_category_name', 'min:3'],
//            'parent_id' => ['string', 'exists::shop_categories,parent_id', 'numeric'],
        ]);
        if ($validator->fails()) {
            $exception = $validator->messages();

            return response()->json([
                "message" => "Unknown server problem",
                "errors" => $exception,
            ], 503);
        }

        $category = Category::find($id);

//        $category->parent_id = $validated['parent_id'];
        $category->shop_category_name = $validated['category_name'];
        $category->shop_category_additional_user_id = $user->id;
        $category->shop_category_accept_status = $category_statuses['category_accept_status'];
        $category->shop_category_publish_status = $category_statuses['category_publish_status'];
        $category->shop_category_show_status = $category_statuses['category_show_status'];
        $category->save();
//        $category->shop_category_additional_user_type = $category_statuses['category_additional_user_type'];

        return response()->json(
            [
                'data' => (new CategoryResource($category)),
            ],
            200
        );
//        return new CategoryResource( $category );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param         $id
     * @return JsonResponse
     */
    public function findAllWorks(Request $request, $id)
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

        $works = Work::where("subcategory_id", "=", $id)
            ->paginate($limit, '*', 'page', $page);

        $WorkCollection = (new WorkCollection($works));

        return response()->json(
            [
                $WorkCollection
            ],
            200);
    }

    /**
     * @OA\Delete(
     * path="/api/v1/shop/categories/{id}",
     * operationId="deleteCategory",
     * tags={"Category for shops"},
     * summary="delete category. => only for system admin",
     * description="delete category",
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
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="New Category Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="category_id", type="integer", example="12"),
     *              @OA\Property(property="category_name", type="string", example="category_name"),
     *              @OA\Property(property="created_at", type="timestamp", example="2021-08-05 01:19:35"),
     *          ),
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
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category, $id)
    {
        // todo transaction for delete or update all sub entities
        $category = Category::find($id);


        if ($category) {
            $category->delete();
            $message = "Shop Category " . $id . " deleted.";
            $success = $id;
            $notifications_En_Server = "Shop Category " . $id . " deleted.";
            $notifications_Fa_Server = "دسته بندی فروشگاه " . $id . " حذف شد";
            return response()->json(
                [
                    'message' => $message,
                    'success' => $success,
                    'NotificationsEnServer' => $notifications_En_Server,
                    'NotificationsFaServer' => $notifications_Fa_Server,
                ],
                200 // 204 (No Content) - 202 (Accepted)
            );
        } else {
            return response()->json(
                [
                    "errors" => [
                        "shop_category" => "Shop Category " . $id . " Not Found!",
                    ],
                ],
                404
            );
        }
    }

    private function category_status_result(User $user)
    {
        $userGetRoleNames = $user->getRoleNames();

        if ($userGetRoleNames->count() > 1) {
//                error
            $category_additional_user_type = 'unknown';
        } else {
            $category_additional_user_type = $userGetRoleNames->toArray()[0];
        }


        if ($user->hasRole('shopkeeper')) {
            $category_accept_status = false;
            $category_publish_status = false;
            $category_show_status = false;
        } elseif ($user->hasRole('system')) {
            $category_accept_status = true;
            $category_publish_status = true;
            $category_show_status = true;
//            } elseif ($user->hasRole('user')) {
//                $category_additional_user_type = 'user';
//                $category_accept_status = false;
//                $category_publish_status = false;
//                $category_show_status = 'privet';
        } else {
            $category_additional_user_type = 'unknown';
            $category_accept_status = false;
            $category_publish_status = false;
            $category_show_status = false;
        }

        return [
            'category_additional_user_type' => $category_additional_user_type,
            'category_accept_status' => $category_accept_status,
            'category_publish_status' => $category_publish_status,
            'category_show_status' => $category_show_status,
        ];
    }
}
