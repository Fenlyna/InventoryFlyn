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

Route::get('/name/{name}/{nrp}', function ($name,$nrp) {
    return "Hai " . $name . $nrp;
})->where('name', '[A-za-z]+');


Route::get('/person', 'PersonController@index');

Route::get('/person/show/{param}', 'PersonController@show');

Route::resource('/student', 'StudentController');