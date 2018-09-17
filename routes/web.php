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

Route::get('/user/udashboard','dashboardcontroller@udashboard')->name('dashboard');
Route::get('/admin/adashboard','dashboardcontroller@adashboard')->name('dashboard');
