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

Route::get('/foobar', function () {
    return 'fjsklfjljfdlakj';
});

Route::redirect('/redirect', 'http://www.google.com', 301);

Route::get('/parameters/{param1}/{param2?}', function ($param1, $param2 = 'default') {
    return 'Param1: '.$param1.'
    Param2: '.$param2;
});

Route::get('/action', function () {
    return Route::currentRouteAction();
    //return Route::current();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
