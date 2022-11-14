<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('file', [App\Http\Controllers\FileController::class, 'create']); 
Route::post('file', [App\Http\Controllers\FileController::class, 'store']);


Route::post('send', [App\Http\Controllers\PostController::class, 'send']); 

Route::get('test', [App\Http\Controllers\PostController::class, 'test'])->name('test'); 
Route::post('post', [App\Http\Controllers\PostController::class, 'post']); 

Route::get('test3', [App\Http\Controllers\PostController::class, 'test3']); 
Route::get('add_advt', [App\Http\Controllers\PostController::class, 'add_advt'])->name('add_advt'); 
Route::post('add_advt', [App\Http\Controllers\PostController::class, 'advt_store'])->name('advt_store'); 

Route::get('akk_manager', [App\Http\Controllers\PostController::class, 'akk_manager'])->name('akk_manager'); 
Route::post('akk_store', [App\Http\Controllers\PostController::class, 'akk_store'])->name('akk_store');
 Route::get('advt_list', [App\Http\Controllers\PostController::class, 'advt_list'])->name('advt_list'); 
 Route::get('akk_list', [App\Http\Controllers\PostController::class, 'akk_list'])->name('akk_list'); 