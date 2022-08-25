<?php /** @noinspection PhpUndefinedClassInspection */

use App\Exceptions\MyException as MyExceptionAlias;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Grant\CustomAccessTokenController;
use App\Http\Controllers\Grant\CustomGrantController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\NormalProductController;
use App\Http\Controllers\LawController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/testUser', function (Request $request) {
    return auth()->user();
});

Route::prefix('v1')->middleware(['auth:api'])->group(function () {
    Route::get('makeRole', function () {
    });
});

//Route::get( '/v1/shops/{id}', function (Request $request) {return 1;} )->name( 'shops.show' );

Route::post('/userRegister', [AuthController::class, 'userRegister'])->name('userRegister');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');
Route::post('/userNewToken', [AuthController::class, 'userNewToken'])->name('userNewToken');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/userLogout', [AuthController::class, 'userLogout'])->name('userLogout');
    Route::prefix('v1')->group(function () {
        Route::post('/userAccount', [AuthController::class, 'userAccount'])->name('userAccount');
        Route::put('/userUpdate/{id}', [AuthController::class, 'update'])->name('userUpdate');

        Route::get('/laws', [LawController::class, 'index'])->name('system.laws.all');
        Route::get('/laws/{id}', [LawController::class, 'show'])->name('system.laws.show');
    });
});

Route::post('/customGrantToken', [CustomGrantController::class, 'customGrantToken'])->name('customGrantToken');
Route::middleware(['auth:api', 'SwaggerRequest'])
    ->post('/newTokenByRefreshToken', [CustomGrantController::class, 'newTokenByRefreshToken'])
    ->name('newTokenByRefreshToken');
//Route::post('/newTokenByRefreshToken', [CustomGrantController::class, 'newTokenByRefreshToken'])->name('newTokenByRefreshToken');
//Route::middleware(['SwaggerRequest'])->post('/newTokenByRefreshToken',
//        function (Request $request) {
//            return response(["e" => $request, "auth" => [$request->request->all(), $request->headers->all(), $request->attributes->all()]]);
//        }
//    )->name('newTokenByRefreshToken');
Route::post('/newTokenByOldToken', [CustomGrantController::class, 'newTokenByOldToken'])->name('newTokenByOldToken');
//Route::middleware(['middleware' => 'throttle'])->post('/customGrantToken', [CustomGrantController::class, 'customGrantToken'])->name('customGrantToken');
Route::post('/customIssueToken', [CustomAccessTokenController::class, 'customIssueToken'])->name('customIssueToken');

Route::prefix('v1')->middleware(['auth:api', 'SwaggerRequest'])->group(function () {

    Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index');
//    Route::get('accounts/user/{id}', [AccountController::class, 'findAll'])->name('accounts.findAll');
    Route::post('accounts', [AccountController::class, 'store'])->name('accounts.store');
    Route::get('accounts/{id}', [AccountController::class, 'show'])->name('accounts.show');
    Route::put('accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
    Route::delete('accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');

    Route::middleware(['AccountValidation', 'MerchantValidation'])->group(function () {

        Route::prefix('shop')->group(function () {
            Route::get('categories', [CategoryController::class, 'findAll'])->name('categories.index');
            Route::post('categories', [CategoryController::class, 'create'])->name('categories.store');
            Route::get('categories/{id}', [CategoryController::class, 'findById'])->name('categories.show');
            Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
            Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

            Route::get('category/{id}/subcategories', [CategoryController::class, 'findAllSub'])
                ->name('categories.indexSub');

            Route::get('subcategory/{id}/works', [CategoryController::class, 'findAllWorks'])->name('categories.works');
        });


        Route::get('shops', [ShopController::class, 'index'])->name('shops.index');

        Route::post('shops', [ShopController::class, 'store'])->name('shops.store');
        Route::post('shopNew', [ShopController::class, 'storeWithRepository'])->name('shops.store');
        Route::get('shops/{id}', [ShopController::class, 'show'])->name('shops.show');
        Route::put('shops/{id}', [ShopController::class, 'update'])->name('shops.update');
        Route::delete('shops/{id}', [ShopController::class, 'destroy'])->name('shops.destroy');
        Route::get('shops/self', [ShopController::class, 'getSelfShop'])->name('shops.getSelfShop');
    });


    Route::post('shops/file', [ShopController::class, 'shopFile'])->name('shops.shopFile');

//    Route::get('shops/shopImage/{id}', [ShopController::class, 'shopImage'])->name('shop.shopImage');
    Route::get('tagsShop/{id}', [ShopController::class, 'tagsShopById'])->name('tagsShop.show');


    Route::prefix('shop')->group(function () {
        Route::get('tags', [TagController::class, 'index'])->name('tags.index');
        Route::post('tags', [TagController::class, 'store'])->name('tags.store');
        Route::get('tags/{id}', [TagController::class, 'show'])->name('tags.show');
        Route::put('tags/{id}', [TagController::class, 'update'])->name('tags.update');
        Route::delete('tags/{id}', [TagController::class, 'destroy'])->name('tags.destroy');
    });

    Route::get('normal-products', [NormalProductController::class, 'index'])->name('normal-products.index');
    Route::post('normal-products', [NormalProductController::class, 'store'])->name('normal-products.store');
    Route::get('normal-products/{id}', [NormalProductController::class, 'show'])->name('normal-products.show');
    Route::put('normal-products/{id}', [NormalProductController::class, 'update'])->name('normal-products.update');
    Route::delete('normal-products/{id}', [NormalProductController::class, 'destroy'])->name('normal-products.destroy');

    Route::get('product-category', [ProductCategoryController::class, 'index'])->name('product-category.index');
    Route::post('product-category', [ProductCategoryController::class, 'store'])->name('product-category.store');
    Route::get('product-category/{id}', [ProductCategoryController::class, 'show'])->name('product-category.show');
    Route::put('product-category/{id}', [ProductCategoryController::class, 'update'])->name('product-category.update');
    Route::delete('product-category/{id}', [ProductCategoryController::class, 'destroy'])
        ->name('product-category.destroy');

});

Route::prefix('v1')->middleware(['auth:api', 'SwaggerRequest'])->group(function () {
    Route::get('shopImage/{id}', [ShopController::class, 'image'])->name('shop.image');
});

//////////////////////////////////////////////////////////////
Route::get('/v1/current', function (Request $request) {
    return auth()->guard('api')->user()->email;
});

Route::get('/v1/exception', function (Request $request) {
    try {
        throw new MyExceptionAlias(' MY Exception; ');
    }
    catch (MyExceptionAlias $ex) {
        report($ex);
    }
    return 'get';
});

Route::middleware(['auth:api', 'activeUser'])->get('/v1/user/{id}', function (Request $request, $id) {

    $twice = function ($HOF, $var) {
        return $HOF($HOF($var));
    };

    $HOF = function ($var) {
        return $var + 3;
    };

    echo($twice($HOF, 7)); // output 10

//    $a = 5/0;
//    return auth()->user();
//    return 2;
    $user = User::findOrFail($id);

//    $user = User::query()->findOrFail($id);

    return $user;
})->name('user by id');


