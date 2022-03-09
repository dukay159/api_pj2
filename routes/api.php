<?php

use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\UserController;
use App\Models\CategoryPost;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('user/search', [UserController::class, 'getSearch'])->name('getSearch');

Route::get('user/test', [UserController::class, 'test'])->name('test');



Route::resource('user', UserController::class);



Route::resource('category', CategoryPostController::class);




