<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bms','BMSInfoController@index');
Route::get('/bms/{id}','BMSInfoController@query');
Route::get('/bms1/{id}','BMSInfoController@query_bms');
Route::get('/bmsgps/{id}','BMSInfoController@query_gps');
Route::get('/bmsworkinfo/{id}','BMSInfoController@query_bms_work');

Route::get('/bat','BatDataController@index');
Route::get('/bat/{id}','BatDataController@query_bat_vol');
Route::get('/batworkinfo/{id}','BatDataController@query_bat_work');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
