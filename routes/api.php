<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\CityResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;



use App\Models\City;
use App\Models\Category;
use App\Models\SubCategory;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/city/{id}', function ($id) {
    return new CityResource(City::findOrFail($id));
});

Route::get('/cities', function () {
    return CityResource::collection(City::all());
});
Route::get('/category/{id}', function ($id) {
    return new CategoryResource(Category::findOrFail($id));
});

Route::get('/categories', function () {
    return CategoryResource::collection(Category::all());
});
Route::get('/subcategory/{id}', function ($id) {
    return new SubCategoryResource(SubCategory::findOrFail($id));
});

Route::get('/subcategories', function () {
    return SubCategoryResource::collection(SubCategory::all());
});


//Route::post('/register', 'Api\v1\RegisterController@register');
Route::post('register',[App\Http\Controllers\Api\v1\PostController::class, 'register'])->name('register'); 



