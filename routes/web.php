<?php

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

Route::get('/kruls', 'KrulController@index');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
);

Route::resource('types', 'TypeController');

Route::resource('colors', 'ColorController');

Route::resource('autos', 'AutoController');

Route::resource('cars', 'CarController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('magazines', 'MagazineController');

Route::resource('customers', 'CustomerController');

Route::resource('orders', 'OrderController');

Route::resource('authors', 'AuthorController');

Route::resource('cities', 'CityController');

Route::resource('kruls', 'KrulController');

Route::resource('falls', 'FallController');

Route::resource('mSIS', 'MSIController');

Route::resource('asds', 'asdController');

Route::resource('types', 'TypeController');

Route::resource('doors', 'DoorController');

Route::resource('books', 'BookController');

Route::resource('clients', 'ClientController');

Route::resource('notes', 'NoteController');

Route::get('users', 'UsersController@index');

Route::get('users-list', 'UsersController@usersList'); 

Route::get('clients-list', 'ClientController@clientsList'); 

Route::get('cars', 'CarController@index');

Route::get('cars-list', 'CarController@carsList'); 

Route::resource('cars', 'CarController');

Route::get('notes-list', 'NoteController@notesList'); 

Route::get('books', 'BookController@index');

Route::get('books-list', 'BookController@booksList'); 

Route::get('chat', 'TestController@index'); 

Route::get('computer', 'ComputerFacadeController@index'); 

Route::group(['prefix' => 'singleton'], function() {
    Route::get('/', [
        'uses' => 'SingletonClassController@initSingleton'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

