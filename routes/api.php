<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept');

Route::get('/figure', 'FigureController@index');
Route::get('/figure/{id}', 'FigureController@show');
Route::post('/figure', 'FigureController@store');
Route::put('/figure/{id}', 'FigureController@update');
Route::delete('/figure/{id}', 'FigureController@destroy');
