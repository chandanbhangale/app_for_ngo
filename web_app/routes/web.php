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
// Route::get('/', function () {
//     return view('donar');
// });


Route::get('teachers','HomeController@showTeachers')->name('teachers');
Route::post('teachers','HomeController@postTeachers')->name('teachers');

Route::get('volunteer','HomeController@showVolunteer')->name('volunteer');
Route::post('volunteer','HomeController@postVolunteer')->name('volunteer');

Route::get('donate','HomeController@showDonateForm')->name('donate');
Route::post('donate','HomeController@postDonateForm')->name('donate');

Route::get('addItem','AdminController@showAddItem')->name('addItem');
Route::post('addItem','AdminController@addItem')->name('addItem');

Route::get('addEvent','AdminController@showAddEvent')->name('addEvent');
Route::post('addEvent','AdminController@addEvent')->name('addEvent');

//Route::get('/','AuthController@home');
/*Route::get('','AdminController@showlogin')->name('');
Route::post('','AdminController@checklogin')->name('');
Route::post('','AdminController@addItem')->name('');
Route::post('','AdminController@addEvent')->name('')

Route::get('','HomeController@showEvents')->name('');
Route::get('','HomeController@showDonateForm')->name('');
Route::post('','HomeController@postDonateForm')->name('');


Route::get('','HomeController@showTeachers')->name('');
Route::post('','HomeController@postTeachers')->name('');
Route::get('','HomeController@showStore')->name('');*/
