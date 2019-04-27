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

Auth::routes();

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Route::get('/', 'IndexController@index')->name('index');
Route::get('/search', 'SearchController@search')->name('search');
Route::get('/advancedSearch', 'SearchController@showAdvancedSearch')->name('showAdvancedSearch');
Route::get('/view/{id}', 'AdsController@view')->name('view');
Route::get('/add', 'AdsController@add')->name('add')->middleware('auth');
Route::post('/add', 'AdsController@addForm')->name('addForm')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
