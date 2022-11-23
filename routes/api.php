<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\CityResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Http\Controllers\Api\v1\FormController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;



use App\Models\User;
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


//Route::get('userinfo', function (Request $request) {
 //  return $request->user();
//$id = Auth::user()->id ;



 //return new UserResource(User::findOrFail($id));
//});


/* Route::get('/city/{id}', function ($id) {
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
 */


Route::get('/subcategory/{id}',[FormController::class, 'getSubCategory']);
Route::get('/cities',[FormController::class, 'getCity']);
 

//Route::post('/register', 'Api\v1\RegisterController@register');
Route::post('register',[FormController::class, 'register'])->name('register'); 

Route::get('userinfo',[FormController::class, 'userinfo'])->name('userinfo'); 



