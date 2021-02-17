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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert',"App\Http\Controllers\InfoInsertController@insertform");
Route::post('/create',"App\Http\Controllers\InfoInsertController@insert");
Route::get('/read',"App\Http\Controllers\InfoController@read");
Route::get('/import',"App\Http\Controllers\api\TenController@import");
