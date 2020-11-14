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

Route::group(['middleware'=>['web']],function(){

    Route::get('/login','AdminController@getlogin');
    Route::post('/postlogin','AdminController@postlogin');
    Route::get('/logout','AdminController@getlogout');
});
Route::group(['middleware'=>['web','auth']],function(){

    Route::get('/index','AdminController@getDashboard');
    Route::get('/getcookerrequest','AdminController@getcookerrequest');
    Route::get('/acceptcooker/{id}','AdminController@acceptcooker');
    Route::get('/deletecooker/{id}','AdminController@deletecooker');
    Route::post('/addcooker','AdminController@addcooker');
    Route::get('/getcookers','AdminController@getcookers');
    Route::get('/getorders','AdminController@getorders');
    Route::get('/getusers','AdminController@getusers');
    Route::get('/getkitchentypes','AdminController@getkitchentypes');



});
// Auth::routes();
