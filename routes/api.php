<?php
use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::get('/products', function () {
//     return Product::all();
// });


// Route::post('/products', function () {
//     return Product::create(
// [
//         'name' =>'Product Five',
//          'slug' =>'product-five',
//           'description' =>'This is Product Five',
//            'price' =>'15.99'
//     ]
// );
// });

Route::resource('products', ProductController::class);

// Route::get('/products',[ProductController::class,'index']);

// Route::post('/products',[ProductController::class,'store']);

// Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});