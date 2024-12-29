<?php

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
Route::get('/menus', [\App\Http\Controllers\Api\MenuController::class, 'index']);
Route::get('/news', [\App\Http\Controllers\Api\NewsController::class, 'index']);
Route::get('/news/{slug}', [\App\Http\Controllers\API\NewsController::class, 'details']);
Route::get('/page/{slug}', [\App\Http\Controllers\API\PageController::class, 'details']);
Route::get('/slider', [\App\Http\Controllers\Api\SliderController::class, 'index']);
Route::get('/service', [\App\Http\Controllers\API\ServiceController::class, 'index']);
Route::get('/object1', [\App\Http\Controllers\API\ObjectsController::class, 'object1']);
Route::get('/object2', [\App\Http\Controllers\API\ObjectsController::class, 'object2']);
Route::get('/objects3', [\App\Http\Controllers\API\ObjectsController::class, 'object3']);
