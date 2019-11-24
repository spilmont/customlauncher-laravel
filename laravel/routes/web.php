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


Route::get('/application/{id}',['as'=>'app.start','uses'=>'ApplicationsController@start']);


Route::resource('app','ApplicationsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('app');


Route::resource('friends','FriendsController');


