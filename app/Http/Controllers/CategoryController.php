<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {


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
     */
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function findAll(Request $request)
    {
        $page = $request->input( 'page' );
        $limit = $request->input( 'limit' );
        if ($request->input( 'sort' ))
        {
            $sort = $request->input( 'sort' );
        }
        else
        {
            $sort = 'id';
        }
        if ($request->input( 'order' ))
        {
            $order = $request->input( 'order' );
        }
        else
        {
            $order = 'asc';
        }
            $category = Category::orderBy($sort, $order)
            ->paginate( $limit, '*', 'page', $page);
//        );
        CategoryResource::collection($category);
//        return $data;

        return response()->json(
            [
                'data' => $category,
            ],
            200
        );



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
        dd($request, $id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return CategoryResource|AnonymousResourceCollection
     */
    public function index()
    {
        $paginate = 25;
        $relations = null;

        return CategoryResource::collection( Category::with( $relations )->paginate( $paginate ) );
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
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        try
        {
            $validated = $request->validate(
                [
                    'category_name' => ['required', 'string', 'min:8'],
                ]
            );

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


            $category = Category::create( [
                'category_name' => $validated['category_name'],
            ] );
            $success['id'] = $category->id;

            $responseCode = 201;
            $message = 'New Category Created';
            $notifications_En_Server = 'New Category Created';
            $notifications_Fa_Server = 'دسته بندی جدید ایجاد شد';

            return response()->json( [
                'message' => $message,
                'success' => $success,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode );
        }
        catch (MyException $exception)
        {

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
        return new CategoryResource( $category );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request  $request
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
     * @param Request  $request
     * @param Category $category
     * @return CategoryResource
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate(
            [
                'category_name' => ['required', 'string', 'min:8'],
            ]
        );
        $validator = Validator::make( $validated, [
            'category_name' => ['string', 'unique:categories,category_name', 'min:8'],
        ] );
        if ($validator->fails())
        {
            $exception = $validator->messages();
        }
//        dd($validator);

        return new CategoryResource( $category );
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
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
        return response()->json( null, 204 );
    }
}
