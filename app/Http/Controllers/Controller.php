<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="API Documentation",
     *      description="API Documentation",
     *      @OA\Contact(
     *          email="admin@admin.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Documentation API Server"
     * )
     *     security={
     *         {
     *             "default": {}
     *         }
     *     }
     *
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // *      title="Integration Swagger in Laravel with Passport Auth Documentation",
    // *      description="Implementation of Swagger with in Laravel",

}
