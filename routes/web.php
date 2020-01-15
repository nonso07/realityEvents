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
/*
Route::get('/home', function () {
    return view('welcome');
});*/
/*
Route::get('/', function () {
    return view('event.index');
}); */
Route::get('/', 'navController@index');

Route::get('/services', 'navController@services');
    
 Route::get('/booking', 'navController@booking');
// Route::get('/upload','adminController@upload');

 Route::get('/admin','adminController@index');

 Route::get('/users','adminController@users');

 //userTabel
 Route::get('/userTabel','adminController@userTabel');

 Route::resource('photo','photoController');

 Route::get('cake','photoController@cakePhoto');

 Route::get('decoration','photoController@decorationPhoto');
 
 Route::get('undertaker','photoController@undertakerPhoto');

 Route::get('makeOver','photoController@makeOverPhoto');

 Route::get('catering','photoController@cateringPhoto');

 Route::get('amblance','photoController@amblancePhoto');

 Route::get('casket','photoController@casketPhoto');
 
 Route::get('lifeBand','photoController@lifeBandPhoto');
 //usherSecurity
 Route::get('usherSecurity','photoController@usherSecurityPhoto');
 //postTabel
 Route::get('/postTabel','photoController@postTabel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//
Route::resource('task','taskController');
//
Route::get('taskTable','taskController@taskTable');
//taskController@taskByType
//Route::post('veiwTable','taskController@taskByType');
