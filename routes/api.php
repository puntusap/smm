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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('types', 'TypeAPIController');

Route::resource('types', 'TypeAPIController');

Route::resource('types', 'TypeAPIController');

Route::resource('types', 'TypeAPIController');

Route::resource('colors', 'ColorAPIController');

Route::resource('colors', 'ColorAPIController');

Route::resource('colors', 'ColorAPIController');

Route::resource('autos', 'AutoAPIController');

Route::resource('autos', 'AutoAPIController');

Route::resource('autos', 'AutoAPIController');

Route::resource('cars', 'CarAPIController');

Route::resource('cars', 'CarAPIController');

Route::resource('cars', 'CarAPIController');

Route::resource('customers', 'CustomerAPIController');

Route::resource('orders', 'OrderAPIController');

Route::resource('clients', 'ClientAPIController');

Route::resource('falls', 'FallAPIController');

Route::resource('m_s_i_s', 'MSIAPIController');

Route::resource('asds', 'asdAPIController');

Route::resource('doors', 'DoorAPIController');

Route::resource('books', 'BookAPIController');

Route::resource('cars', 'CarAPIController');

Route::resource('notes', 'NoteAPIController');