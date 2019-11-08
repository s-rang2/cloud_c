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
    return view('/project/intro');
});

Route::get('/intro-wook', function () {
    return view('/project/wook');
});

Route::get('/intro-sungmin', function () {
    return view('/project/min');
});