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

Route::get('/','AuthController@home');
Route::get('','AdminController@showlogin')->name('');
Route::post('','AdminController@checklogin')->name('');
Route::post('','AdminController@addItem')->name('');
Route::post('','AdminController@addEvent')->name('')

Route::get('','HomeController@showEvents')->name('');
Route::get('','HomeController@showDonateForm')->name('');
Route::post('','HomeController@postDonateForm')->name('');
Route::get('','HomeController@showVolunteer')->name('');
Route::post('','HomeController@postVolunteer')->name('');
Route::get('','HomeController@showTeachers')->name('');
Route::post('','HomeController@postTeachers')->name('');
Route::get('','HomeController@showStore')->name('');