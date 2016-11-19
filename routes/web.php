<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//change another view i think
Route::get('/contact', function () {
	return 'this is home page';
    // return view('welcome');
});

//route with 1 parameter
Route::get('/contact/{something}', function ($something) {
	return 'this is test '.$something;
    // return view('welcome');
});
//route with 2 parameter
Route::get('/contact/{something}/{fuck}', function ($something,$fuck) {
	return 'this is test '.$something.' and '.$fuck;
    // return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
