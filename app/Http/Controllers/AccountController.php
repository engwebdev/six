<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{


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
     * path="/api/v1/account",
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

}
