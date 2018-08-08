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
Route::get('/goodbye', 'HelloController@goodby');
Route::get('/hello', 'HelloWorldController@getIndex');
Route::get('/all', 'EmployeeController@all');
Route::get('/employee', 'EmployeeController@res');
Route::get('/employee/position', 'BeaconController@reg');
