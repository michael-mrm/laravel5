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
Route::get('/','PagesController@welcome');
Route::get('/bikes','bikescontroller@index');
Route::get('/createbikes','bikescontroller@create');
Route::get('/showbikes/{bike}','bikescontroller@show');
Route::post('/storebikes','bikescontroller@store');
Route::get('/editbikes/{bike}','bikescontroller@edit');
Route::patch('/updatebikes/{bike}','bikescontroller@update');
Route::delete('/deletebikes/{bike}','bikescontroller@delete');
//Route::get('/bikes','PagesController@bikes');
/*
Route::get('/', function(){
    return view('welcome');
});
*/



