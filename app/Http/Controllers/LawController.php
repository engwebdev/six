<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\LawResource;
use App\Models\Law;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function index(Request $request): JsonResponse
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function show(int $id, Request $request):JsonResponse
    {
        $law = Law::find($id);
        if ($law) {
            $Resource = new LawResource($law);
            $Resource->toJson();
            $Response = $Resource->toResponse($request);
            $Response->setStatusCode(200);

            return $Response;
        }
        else
        {
            return response()->json(
                [
                    'errors' => [
                        'law' => "law Not Found!",
                    ],
                ],
                404
            );
        }

        //
    }

    /**
     * Display the specified resource.
     *
//     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function mainLaw(Request $request):JsonResponse
    {
        $law = Law::find(1);
        if ($law) {
            $Resource = new LawResource($law);
            $Resource->toJson();
            $Response = $Resource->toResponse($request);
            $Response->setStatusCode(200);

            return $Response;
        }
        else
        {
            return response()->json(
                [
                    'errors' => [
                        'law' => "law Not Found!",
                    ],
                ],
                404
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
