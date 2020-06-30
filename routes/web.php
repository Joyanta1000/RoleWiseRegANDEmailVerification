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
Route::get('reg','UserController@reg');
Route::resource('userType','UserTypeController');
Route::resource('user','UserController');
Route::resource('category','CategoryController');
Route::post('/store','UserController@store');

Route::get('/verification/{confirmation_code}','UserController@verified');

Route::get('/emailverify','UserController@verified');
//Route::post('/verified','UserController@verified');
