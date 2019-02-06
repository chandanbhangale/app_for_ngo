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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@home');
Route::get('/donate','HomeController@donate');
Route::get('/gallery','HomeController@gallery');
Route::get('/events','HomeController@events');
Route::get('/about','HomeController@about');
Route::get('/getinvolved','HomeController@getinvolved');

Route::get('/admin/login','AdminController@login');