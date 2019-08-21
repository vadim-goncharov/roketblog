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
Route::get('/','WellcomePage@index');
Route::get('/show/{id}','TestShow@index')->name('show');
Route::post('/addcom','TestShow@update')->name('addcom');
Auth::routes();
Route::resource('test','test_controller');
Route::get('/test', 'test_controller@index')->name('test');
