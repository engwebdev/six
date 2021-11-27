<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Traits\QueryParams;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagController extends Controller {
    use QueryParams;

    /**
     * @OA\Get(
     * path="/api/v1/shop/tags",
     * operationId="get categories",
     * tags={"Tag for shops"},
     * summary="get all tags. => for shopkeeper and system admin",
     * description="get all tags",
     *
     *
     *
     *
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
     *                  example="{'url': null,'label': 'Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next','active': false}",
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
     *                  example="{'url': null,'label': 'Previous','active': false},{'url': 'http://127.0.0.1:8001/api/v1/shop/categories?page=1','label': '1','active': true},{'url': null,'label': 'Next','active': false}",
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
     *
     * Get
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
        $this->CheckQueryParams( $request );

        $tags = Tag::orderBy( $this->sort, $this->order )
            ->when( $user->hasRole( 'shopkeeper', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->select( 'id', 'tag_name', 'tag_accept_status', 'tag_publish_status', 'tag_additional_user_id' )
                    ->Where( 'tag_accept_status', true )
                    ->orWhere( function ($subQuery) use ($user_id) {
                        $subQuery
                            ->where( 'tag_accept_status', false )
                            ->Where( 'tag_additional_user_id', $user_id );
                    } );
            } )
            ->when( $user->hasRole( 'user', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->select( 'id', 'tag_name' )
                    ->Where( 'tag_accept_status', true )
                    ->where( 'tag_publish_status', true );
            } )
            ->paginate( $this->limit, '*', 'page', $this->page );

        return response()->json( $tags,
            200
        );
    }

    /**
     * @OA\Post(
     * path="/api/v1/shop/tags",
     * operationId="newTag",
     * tags={"Tag for shops"},
     * summary="create new tag. => only for system admin",
     * description="create new tag",
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"tag_name"},
     *               @OA\Property(
     *                  property="tag_name",
     *                  type="string",
     *                  example="tag name",
     *                  format="string",
     *                  description="tag name",
     *                  default="null",
     *                  nullable=false,
     *               ),
     *         ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"tag_name"},
     *               @OA\Property(
     *                  property="tag_name",
     *                  type="string",
     *                  example="tag name",
     *                  format="string",
     *                  description="tag name",
     *                  default="null",
     *                  nullable=false,
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
     *
     */
    /**
     *
     * post
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request)
    {
        try
        {
            $user = auth()->user();

            if ($user->hasRole( 'shopkeeper', 'api' ))
            {
                $additional_user_type = 'shopkeeper';
                $tag_publish_status = false;
                $tag_accept_status = false;
            }
            elseif ($user->hasRole( 'system', 'api' ))
            {
                $additional_user_type = 'user';
                $tag_publish_status = true;
                $tag_accept_status = true;
            }
            elseif ($user->hasRole( 'user', 'api' ))
            {
                $additional_user_type = 'user';
                $tag_publish_status = false;
                $tag_accept_status = false;
            }
            elseif ($user->hasRole( 'admin', 'api' ))
            {
                $additional_user_type = 'admin';
                $tag_publish_status = true;
                $tag_accept_status = true;
            }
            else
            {
                $additional_user_type = 'unknown';
                $tag_publish_status = false;
                $tag_accept_status = false;
            }

            $validated = $request->validate(
                [
                    'tag_name' => ['required', 'string', 'min:3'],
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

            $tag = Tag::create(
                [
                    'tag_name' => $validated['tag_name'],
                    'tag_publish_status' => $tag_publish_status,
                    'tag_accept_status' => $tag_accept_status,
                    'tag_additional_type' => $additional_user_type,
                    'tag_additional_user_id' => $user->id,
                ]
            );

            $success['id'] = $tag->id;

            $responseCode = 201;
            $message = 'New Tag Created';
            $notifications_En_Server = 'New Tag Created';
            $notifications_Fa_Server = 'برچسب جدید ایجاد شد. و منتظر تایید مدیر میباشد.';

            return response()->json( [
                'message' => $message,
                'success' => $success,
                "data" => new TagResource( $tag ),
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
            ], $responseCode );

        }
        catch (MyException $exception)
        {
//            throw MyException::class();
        }
    }

    /**
     * @OA\Get(
     * path="/api/v1/shop/tags/{id}",
     * operationId="get tags id",
     * tags={"Tag for shops"},
     * summary="get Tag by id in url. => for shopkeeper and system admin",
     * description="get Tag by id in patch 'url'",
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


        $tag = Tag::findOrFail( $id );


        return response(
            [
                "data" => new TagResource( $tag ),
            ], 200 );
    }

    /**
     * @OA\Put(
     * path="/api/v1/shop/tags/{id}",
     * operationId="updateTags",
     * tags={"Tag for shops"},
     * summary="update tag. => only for system admin",
     * description="update tag",
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $user_id = $user->id;

        $validated = $request->validate(
            [
                'tag_name' => ['nullable', 'string', 'min:3'],
                'tag_accept_status' => ['nullable', 'boolean'],
                'tag_publish_status' => ['nullable', 'boolean'],
            ]
        );

        if (($user->hasRole( 'admin', 'api' )) or ($user->hasRole( 'system', 'api' )))
        {
            $tag = Tag::findOrFail( $id );
            $tag->tag_name = $validated['tag_name'];
            $tag->tag_accept_status = $validated['tag_accept_status'];
            $tag->tag_publish_status = $validated['tag_publish_status'];
            $tag->save();
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
        return response()->json(
            new TagResource ($tag),
            200
        );


    }

    /**
     * @OA\Delete(
     * path="/api/v1/shop/tags/{id}",
     * operationId="deleteTag",
     * tags={"Tag for shops"},
     * summary="delete tag. => only for system admin",
     * description="delete tag",
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

    /**
     *
     * PUT/PATCH /tags/{tag}
     * not need this method
     * update status by id
     *
     *
     * @param $id
     */
    public function status($id)
    {

    }
}
