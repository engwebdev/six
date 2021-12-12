<?php

namespace App\Http\Controllers;

use App\Http\Resources\NormalProductCollection;
use App\Http\Resources\ShopCollection;
use App\Models\NormalProduct;
use App\Models\RolesShopsUsers;
use App\Models\Shop;
use App\Traits\QueryParams;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class NormalProductController extends Controller {
    use QueryParams;

    /**
     * @OA\Get(
     * path="/api/v1/normal-product",
     * operationId="get normal products",
     * tags={"Normal Products"},
     * summary="get all normal prduct. => for system admin and all customers",
     * description="get all normal prduct",
     *
     *
     *
     *
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * )
     */
    /**
     * get all normal product
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request for query params
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;

        $this->checkQueryParams( $request );

        // todo get shops of this user if he is shopkeeper
        // todo two way first solution => use product_registry_shopkeeper_id field ---4> sub shops not work
        // todo two way second solution => use product_shop_id field ---> need to auth for shops and sub shops

        $normalProducts = NormalProduct::orderBy( $this->sort, $this->order )
            ->when( $user->hasRole( 'system', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->where( 'product_status_accept', 1 )
                    ->orWhere( 'product_status_accept', 0 )
                    ->orWhereNull( 'product_status_accept' )
                    ->with( 'confirm_comment' );
            } )
            ->when( $user->hasRole( 'shopkeeper', 'api' ), function ($query) use ($user_id, $user) {
                return $query
//                    ->when($user->hasPermissionTo('edit this products'), function ($query) use ($user_id, $user) { return $query->where();})
                    ->with( 'confirm_comment' )
                    ->where( 'product_status_accept', 1 )
                    ->orWhere( function ($subQuery) use ($user_id) {
                        $subQuery
                            ->where( 'product_status_accept', false )
                            ->Where( 'product_registry_shopkeeper_id', $user_id );
                    } );
            } )
            ->when( $user->hasRole( 'user', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->select( 'id',
                        'product_name',
                        'product_description',
                        'product_info',
                        'product_note',
                        'product_last_price',
                        'product_last_price_date',
                        'product_status_price_discount',
                        'product_last_price_discount_percentage',
                        'product_last_price_discount_type',
                        'product_index_image_url',
                        'product_category_id',
                        'product_category_name',
                        'product_shop_id',
                        'product_quantity_total',
                        'product_quantity_selling',
                        'product_quantity_sold',
                        'product_quantity_returned',
                        'product_number_comments',
                        'product_total_points',
                        'product_average_points',
                        'product_last_point' )
                    ->with( 'products_images' )
                    ->with( 'product_price_history' )
                    ->where( 'product_status_accept', 1 )
                    ->where( 'product_status_publish', 1 );
            } )
            ->paginate( $this->limit, '*', 'page', $this->page );

        return response()->json(
            new NormalProductCollection
            ( $normalProducts )
            , 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $access_token = $request->header( 'Authorization' );
        $auth_header = explode( ' ', $access_token );
        $token = $auth_header[1];
        $token_parts = explode( '.', $token );
        $token_header = $token_parts[1];
        $token_header_json = base64_decode( $token_header );
        $token_header_array = json_decode( $token_header_json, true );
        $token_aud = $token_header_array['aud'];
        $token_id = $token_header_array['jti'];
        $token_iat = $token_header_array['iat'];
        $token_nbf = $token_header_array['nbf'];
        $token_exp = $token_header_array['exp'];
        $token_sub = $token_header_array['sub'];
        $token_scopes = $token_header_array['scopes'];
//        dd($token_header_array, Carbon::createFromTimestamp($token_iat));
        $user_id = $user->id;
//        dd($user_id);

//        $this->checkQueryParams($request);
//        DB::enableQueryLog();

//        dd($shopsAndRolesFromPivot);
        $validated = $request->validate(
            [
                'product_name' => ['required', 'string', 'min:3'],
                'product_description' => ['required', 'string', 'min:3'],
                'product_info' => ['nullable', 'string'],
                'product_note' => ['nullable', 'string'],
//                'product_status_accept' => [''],
                'product_status_confirm_user_id' => ['nullable', 'integer'],
                'product_status_publish' => ['nullable', 'boolean'],
                'product_status_publish_date' => ['nullable', 'date'],
                'product_last_price' => ['nullable', 'numeric'],
                'product_last_price_date' => ['nullable', 'date'],
                'product_status_price_discount' => ['nullable', 'numeric'],
                'product_last_price_discount_percentage' => ['nullable', 'numeric', 'between:0.01,99.99'],
                'product_last_price_discount_type' => ['nullable', 'string'],
//                'product_index_image_url' => ['nullable', 'string'],
                'product_category_id' => ['nullable', 'integer'],
                'product_category_name' => ['nullable', 'string'],
                'product_shop_id' => ['required', 'integer'],
                'product_registry_shopkeeper_id' => ['nullable', 'integer'],
                'product_quantity_total' => ['nullable', 'integer'],
                'product_quantity_selling' => ['nullable', 'integer'],
                'product_quantity_sold' => ['nullable', 'integer'],
                'product_quantity_returned' => ['nullable', 'integer'],
                'product_number_comments' => ['nullable', 'integer'],
                'product_total_points' => ['nullable', 'numeric'],
                'product_average_points' => ['nullable', 'numeric'],
                'product_last_point' => ['nullable', 'numeric'],
//                '' => [''],
                'product_tag_ids.*' => ['nullable', 'integer', 'exists:product_tags,id'],
                'product_images' => ['nullable', 'array'],
                'product_images.*' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
//                'product_attributes.*' => ['nullable', 'string'],
                'product_details.*' => ['nullable', 'array'],
                'product_details.*.*' => ['nullable', 'string'],
//                'product_moveAble' => ['nullable', 'string'],
            ]
        );

        // todo shopkeeper have shop
        $shopsAndRolesFromPivot = RolesShopsUsers::where( 'user_id', $user_id )->where( 'shop_id', $validated['product_shop_id'] )->get();
        $shopsAndRolesFromPivot->filter( function ($value, $key) {
            $role = Role::where( 'id', $value->role_id )->where( 'guard_name', 'api' )->first();
            if (!$role->name == 'shopkeeper')
            {
                dd( 'ee' );
            }
        } );

        $normalProduct = NormalProduct::create( $validated );

        // todo normalProductImages
        $normalProduct_id = $normalProduct->id;
        if (isset( $validated['product_images'] ))
        {
            $i = 1;
            foreach ($validated['product_images'] as $key => $image_file)
            {
                $normal_product_image_name = $image_file->getClientOriginalName();
                $format = (explode( '.', $normal_product_image_name ));
                $file_name_is = $format[0];
                $file_format_is = end( $format );
                $name_in_store = $file_name_is . '-' . date( 'Y-m-d-H-m', strtotime( Carbon::now() ) ) . '.' . $file_format_is;

                $image_file_url = $image_file->storeAs( 'shop_id/' . $validated['product_shop_id'] . '_normal_product_id_' . $normalProduct_id . '_normal_product_name_' . $validated['product_name'], $name_in_store );
                $normalProduct_image_url = 'shop/' . $image_file_url;


                    $normalProduct->product_index_image_url = $normalProduct_image_url;
                    $normalProduct->save();

                $normalProduct->normalProductImages()->create(
                    [
//                        'products_imageable_id' => $normalProduct_id,
//                        'products_imageable_type' => 'App\Models\NormalProduct',
                        'image_url' => $normalProduct_image_url,
                        'image_index_param' => $i,
                        'image_type' => $image_file->getMimeType(),
                        'image_format' => $file_format_is,
                        'image_size' => $image_file->getSize(),
                        'file_name' => $image_file->getClientOriginalName(),
                        'uploader_user_id' => $user_id,
                        'uploader_user_date' => date( 'Y-m-d', strtotime( Carbon::now() ) ),
                        'activate_status' => 0,
                        'accept_status' => 0,
                        'publish_status' => 1,
                    ] );
                $i = $i + 1;
            }
            unset($i);
//            dd( 'dd' );
        }

        // todo normalProductTags
        /*if (isset( $validated['product_tag_ids'] ))
        {
            $product_tag_ids = $validated['product_tag_ids'];
            $normalProduct->normalProductTags()->attach( $product_tag_ids, ['product_tags_tags_status' => 0] );
        }*/
        // 1. todo normalProductCategory => select (product category from this shop) to categories of products shop (categories_products_shops) -> "product categories of shop"
        // 2. todo normalProductCategory => add new (product category) to (categories of products this shop) (categories_products_shops) -> "product categories of shop"


        // todo normalProductDetail
        // todo normalProductAttribute
        // todo attribute price -> (price history table)


    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     * @return void
     */
    public function show(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @queryParam  sort
     * @urlParam  $id path params
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param int     $id
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        //
    }
}
