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

/*Route::get('/', function () {
//    return view('welcome');

});*/



Route::get('/', ['as'=>'MainPage','uses'=>'MainController@Main']);
Route::get('myPic', ['as' => 'myPic', 'uses' => 'MainController@MyPic']);
Route::get('threePicInCenterBtstrp', ['as' => 'threePicInCenterBtstrp', 'uses' => 'MainController@ThreePicInCenterBtstrp']);


// страница "наши преимущества"
Route::get('advantages/{id?}', ['as' => 'advantages', 'uses' => 'MainController@advantages']);
// Route::get('advantages/{id?}', ['as' => 'advantages', 'uses' => 'CommonController\MainController@advantages']);
