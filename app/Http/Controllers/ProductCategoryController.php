<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryCollection;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exceptions\MyException;
use Illuminate\Support\Facades\DB;
use App\Traits\QueryParams;

class ProductCategoryController extends Controller {
    use QueryParams;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
//        $this->checkQueryParams( $request );

        dd( ProductCategory::customPagination( new \App\Query\Pagination\Pagination( $request ) )->customOrder( new \App\Query\Order\TestOrder( $request ) )->toSql() );


        $productCategories = ProductCategory::orderBy( $this->sort, $this->order )
            ->when( $user->hasRole( 'system', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->where( 'product_category_accept_status', 1 )
                    ->orWhere( 'product_category_accept_status', 0 )
                    ->orWhereNull( 'product_category_accept_status' );
            } )
            ->when( $user->hasRole( 'shopkeeper', 'api' ), function ($query) use ($user_id) {
                return $query
                    ->where( 'product_category_accept_status', 1 )
                    ->orWhere( function ($subQuery) use ($user_id) {
                        $subQuery
                            ->where( 'product_category_accept_status', 0 )
                            ->Where( 'product_category_additional_user_id', $user_id );
                    } );
            } )
            ->when( $user->hasRole( 'user', 'api' ), function ($query) use ($user_id) {
                return $query
//                    ->select()
                    ->where( 'product_category_accept_status', 1 )
                    ->where( 'product_category_publish_status', 1 );
            } )
            ->paginate( $this->limit, '*', 'page', $this->page );

//        ProductCategoryResource::collection( $productCategories );
        return response()->json(
            new ProductCategoryCollection
            ( $productCategories ),
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;

        $user->guard_name = 'api';
        $roles = $user->getRoleNames();

        if ($roles->contains( 'shopkeeper' ))
        {
            $product_category_additional_user_type = 'shopkeeper';
        }
        elseif ($roles->contains( 'system' ))
        {
            $product_category_additional_user_type = 'system';
        }
        else
        {
            $product_category_additional_user_type = 'unknown';
        }

        $validated = $request->validate(
            [
                'parent_id' => ['nullable', 'integer'],
                'product_category_name' => ['required', 'string'],
//                'product_category_additional_user_id' => ['required', 'string'],
//                'product_category_additional_user_type' => ['required', 'string'],
//                'product_category_accept_status' => ['nullable', 'boolean'],
//                'product_category_publish_status' => ['nullable', 'boolean'],
//                'product_category_show_status' => ['nullable', 'boolean'],
            ] );
// change

        try
        {
            /*            $productCategory = ProductCategory::create(
                            [
                                'parent_id' => $validated['parent_id'],
                                'product_category_name' => $validated['product_category_name'],
                                'product_category_additional_user_id' => $user_id,
                                'product_category_additional_user_type' => $product_category_additional_user_type,
                                'product_category_accept_status' => false,
                                'product_category_publish_status' => false,
                                'product_category_show_status' => 'private',
                            ]
                        );*/

            $productCategory = new ProductCategory();
            if (isset( $validated->parent_id ))
            {
                $productCategory->parent_id = $request->post( 'parent_id' );
            }
            $productCategory->product_category_name = $request->post( 'product_category_name' );
            $productCategory->product_category_additional_user_id = $user_id;
            $productCategory->product_category_additional_user_type = $product_category_additional_user_type;
            $productCategory->product_category_accept_status = false;
            $productCategory->product_category_publish_status = false;
            $productCategory->product_category_show_status = 'private';

            $productCategory->save();

            // todo add this category for this shop categories -> table "categories_products_shops"

            return response()->json(
                [
                    'data' => $productCategory,
                    'message' => 'New Product Category Created.',
                    'success' => 'New Product Category Created.',
                    'NotificationsEnServer' => 'New Product Category Created.',
                    'NotificationsFaServer' => 'دسته بندی جدید برای فروشگاهها افزوده شد.',

                ], 201
            );
        }
        catch (MyException $exception)
        {

        }
        dd( 222 );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
//        dd($request->post());
        $user = auth()->user();
        $user_id = $user->id;
        if ($user->hasRole( 'system', 'api' ))
//        if (1==1)
        {
//            if ($user->hasPermissionTo()) {}
            $validated = $request->validate(
                [
                    'parent_id' => ['nullable', 'integer'],
                    'product_category_name' => ['required', 'string'],
                    'product_category_accept_status' => ['nullable', 'boolean'],
                    'product_category_show_status' => ['nullable', 'boolean'],


//                    'product_category_publish_status' => ['nullable', 'boolean'],
//                    'product_category_additional_user_type' => ['required', 'string'],
//                    'product_category_additional_user_id' => ['required', 'string'],
                ] );

            $productCategory = ProductCategory::findOrFail( $id );
            $productCategory->parent_id = $request->post( 'parent_id' );
            $productCategory->product_category_name = $request->post( 'product_category_name' );
            $productCategory->product_category_accept_status = $request->post( 'product_category_accept_status' );
            $productCategory->product_category_show_status = $request->post( 'product_category_show_status' );
            $productCategory->product_category_show_status = true;
            $productCategory->save();

            return response()->json(
                [
                    'data' => new ProductCategoryResource
                    ( $productCategory ),
                    'message' => 'Old Product Category ' . $id . ' Updated',
                    'success' => 'Old Product Category Updated',
                    'NotificationsEnServer' => 'Old Product Category by id ' . $id . ' Updated',
                    'NotificationsFaServer' => 'دسته بندی محصولات با شناسه ' . $id . ' بروزرسانی شد',
                ], 201
            );
        }
        else
        {
            return response()->json(
                [
                    'error' => 'Unauthorized',
                ], 401
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function getShopCategoriesByShopId(Request $request, $id)
    {
        // todo from table categories_products_shops
        // for edit self categories for shop
    }
}
