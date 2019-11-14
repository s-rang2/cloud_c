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
Route::get('/cloudurl/{id}','CloudController@url')->name('url');


Route::get('/', function () {
    return view('/project/intro');
});

Route::get('/intro-wook', function () {
    return view('/project/wook');
});

Route::get('/intro-sungmin', function () {
    return view('/project/min');
});
Route::post('/cloudStore1','CloudController@store1')->name('store1');
Route::delete('/CloudController/{id}','CloudController@delete1')->name('delete1');
