<?php /** @noinspection PhpUndefinedClassInspection */

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Exceptions\MyException as MyExceptionAlias;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Grant\CustomGrantController;
use App\Http\Controllers\Grant\CustomAccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware( 'auth:sanctum' )->get( '/v1/user', function ( Request $request ) {
//    dd($request);
    return $request->user();
}
);
Route::get( '/v1/testUser', function ( Request $request ) {
//        return 11;
//        return User::all();
//        dd(auth()->user());
//        return $request;
        return auth()->user();
    }
);


Route::post('/userRegister', [AuthController::class, 'userRegister'])->name('userRegister');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');
Route::post('/userNewToken', [AuthController::class, 'userNewToken'])->name('userNewToken');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/userLogout', [AuthController::class, 'userLogout'])->name('userLogout');
});

Route::post('/customGrantToken', [CustomGrantController::class, 'customGrantToken'])->name('customGrantToken');
Route::middleware(['auth:api', 'SwaggerRequest'])->post('/newTokenByRefreshToken', [CustomGrantController::class, 'newTokenByRefreshToken'])->name('newTokenByRefreshToken');
//Route::post('/newTokenByRefreshToken', [CustomGrantController::class, 'newTokenByRefreshToken'])->name('newTokenByRefreshToken');
//Route::middleware(['SwaggerRequest'])->post('/newTokenByRefreshToken',
//        function (Request $request) {
//            return response(["e" => $request, "auth" => [$request->request->all(), $request->headers->all(), $request->attributes->all()]]);
//        }
//    )->name('newTokenByRefreshToken');
Route::post('/newTokenByOldToken', [CustomGrantController::class, 'newTokenByOldToken'])->name('newTokenByOldToken');
//Route::middleware(['middleware' => 'throttle'])->post('/customGrantToken', [CustomGrantController::class, 'customGrantToken'])->name('customGrantToken');
Route::post('/customIssueToken', [CustomAccessTokenController::class, 'customIssueToken'])->name('customIssueToken');


























//////////////////////////////////////////////////////////////
Route::get('/v1/current', function ( Request $request) {
    return auth()->guard('api')->user()->email;
});

Route::get('/v1/exception', function ( Request $request) {
    try
    {
        throw new MyExceptionAlias(' MY Exception; ');
    }
    catch (MyExceptionAlias $ex) {
        report($ex);
    }
    return 'get';
});

Route::middleware(['auth:api', 'activeUser'])->get('/v1/user/{id}', function ( Request $request, $id) {
//    $a = 5/0;
//    return auth()->user();
//    return 2;
    $user = User::findOrFail($id);

//    $user = User::query()->findOrFail($id);

    return $user;
})->name('user by id');


