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

// HTML Routes
Route::get('/', function () {
  return view('welcome');
});

/*
|--------------------------------------------------------------------------
*/

// Collection Routes

//// Food
Route::get('/foods', 'FoodsController@index');
Route::post('/foods', 'FoodsController@create');

//// Hydration
Route::get('/hydrations', 'HydrationsController@index');
Route::post('/hydrations', 'HydrationsController@create');

//// Exercise
Route::get('/exercises', 'ExercisesController@index');
Route::post('/exercises', 'ExercisesController@create');

/*
|--------------------------------------------------------------------------
*/

// Singular Routes

//// Food
Route::get('/foods/{id}', 'FoodsController@show');
Route::put('/foods/{id}', 'FoodsController@update');
Route::delete('/foods/{id}', 'FoodsController@destroy');

//// Hydration
Route::get('/hydrations/{id}', 'HydrationsController@show');
Route::put('/hydrations/{id}', 'HydrationsController@update');
Route::delete('/hydrations/{id}', 'HydrationsController@destroy');

//// Exercise
Route::get('/exercises/{id}', 'ExercisesController@show');
Route::put('/exercises/{id}', 'ExercisesController@update');
Route::delete('/exercises/{id}', 'ExercisesController@destroy');
