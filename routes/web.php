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

Route::get('/','pagecontroller@index')->name('welcome');

Route::get('/register','registercontroller@create')->name('register');
Route::post('/user/submit','registercontroller@store')->name('userregister');

Route::get('/login','logincontroller@getloginpage')->name('login');
Route::post('/login','logincontroller@login')->name('login');

Route::get('/user/dashboard','dashboardcontroller@dashboard')->name('dashboard');
Route::get('/user/dashboard','dashboardcontroller@dashboard')->name('dashboard');

Route::get('/user/dashboard/category','dashboardcontroller@getcatpage')->name('getcatpage');
Route::post('/user/dashboard/category/submit','dashboardcontroller@add_category')->name('add_category');
Route::get('/user/dashboard/product','dashboardcontroller@getproductpage')->name('getproductpage');
Route::post('/user/dashboard/product/submit','dashboardcontroller@add_product')->name('add_product');
