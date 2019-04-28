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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/videos/create', 'VideoController@create')->name('videos.create');
Route::post('/videos/store', 'VideoController@store')->name('videos.store');
Route::post('/rating/store', 'RatingController@store')->name('ratings.store');
Route::post('/sample/store', 'SampleRecipientController@store')->name('sample.store');
Route::post('/thankyou', 'ThankYouController@store')->name('thankyou.store');
