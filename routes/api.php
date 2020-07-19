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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/category', ['as' => 'v1.category', 'uses' => 'Api\SampahController@category']);
Route::get('v1/sampah', ['as' => 'v1.sampah', 'uses' => 'Api\SampahController@sampah']);
Route::get('v1/sampah/edit/{id}', ['as' => 'v1.sampah.edit', 'uses' => 'Api\SampahController@edit']);
Route::post('v1/sampah', ['as' => 'v1.sampah', 'uses' => 'Api\SampahController@store']);
Route::put('v1/sampah/update/{id}', ['as' => 'v1.sampah.update', 'uses' => 'Api\SampahController@update']);
Route::delete('v1/sampah/destroy/{id}', ['as' => 'v1.sampah.destroy', 'uses' => 'Api\SampahController@destroy']);
