<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('crud', 'CrudController');
Route::get('/hasil', [
  'uses' => '\App\Http\Controllers\SearchController@getResult',
  'as'  => 'crud.hasil',
]);
/*
* Search Box
*/

/*Route::get('/search', [
  'uses' => '\App\Http\Controllers\SearchController@getResults',
  'as'  =>  'search.results',
]);
*/
