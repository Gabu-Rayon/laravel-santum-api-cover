<?php
use App\Models\Product;
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
Route::get('/products',function(){
     return Product::all();
});

Route::get('/products',function(){
   return Product::create([
    'name' =>'Product One',
    'slug' =>'product-one',
    'description' =>'This Product One Description',
    'price' =>'999999.99'
   ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});