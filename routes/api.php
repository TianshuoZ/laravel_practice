<?php


use App\Models\TenInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});

//Route::apiResource('/apiuser', 'App\Http\Controllers\api\TenController');


Route::get('/index', "App\Http\Controllers\api\TenController@index");
Route::get('/show/[TenInfo::id]', "App\Http\Controllers\api\TenController@show");
Route::post('/store', "App\Http\Controllers\api\TenController@store");
Route::put('/update/[TenInfo]', "App\Http\Controllers\api\TenController@update");
Route::delete('/destroy/[TenInfo]', "App\Http\Controllers\api\TenController@destroy");
