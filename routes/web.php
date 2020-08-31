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

Auth::routes();

// Route::get('/home', 'BrandController@index')->name('home');

Route::get('/viewBrand','BrandController@index');
Route::get('/createBrand', 'BrandController@create'); //return page create cust
Route::post('/insertBrand', 'BrandController@store'); //proses add data cust
Route::post('/searchBrand','BrandController@search'); //search data