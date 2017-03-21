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

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::get('/', 'PhotoController@index')->middleware('guest');





/**
 * Category Routes
 */


Route::get('/categories/create', 'CategoryController@create');
Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/edit/{category}', 'CategoryController@edit');
Route::post('/categories/{category}', 'CategoryController@update');
Route::get('/categories/delete/{category}', 'CategoryController@destroy');



/**
 * Album Routes
 */


Route::get('/albums/create', 'AlbumController@create');
Route::get('/albums', 'AlbumController@index');
Route::post('/albums', 'AlbumController@store');
Route::get('/albums/edit/{album}', 'AlbumController@edit');
Route::post('/albums/{album}', 'AlbumController@update');
Route::get('/albums/delete/{album}', 'AlbumController@destroy');



/**
 * photo Routes
 */


Route::get('/photos/create', 'PhotoController@create');
Route::get('/photos', 'PhotoController@index');
Route::post('/photos', 'PhotoController@store');
Route::get('/photos/{photo}', 'PhotoController@show');
Route::get('/photos/edit/{photo}', 'PhotoController@edit');
Route::post('/photos/{photo}', 'PhotoController@update');
Route::get('/photos/delete/{photo}', 'PhotoController@destroy');

Route::get('/mygallery', 'PhotoController@mygallery');


/**
 * tag Routes
 */


Route::get('/tags/create', 'TagController@create');
Route::get('/tags', 'TagController@index');
Route::post('/tags', 'TagController@store');
Route::get('/tags/{tag}', 'TagController@show');
Route::get('/tags/edit/{tag}', 'TagController@edit');
Route::post('/tags/{tag}', 'TagController@update');
Route::get('/tags/delete/{tag}', 'TagController@destroy');

/**
 * comment Routes
 */



Route::post('/comments', 'CommentController@store');
Route::get('/comments/{comment}', 'CommentController@show');
Route::get('/comments/edit/{comment}', 'CommentController@edit');
Route::post('/comments/{comment}', 'CommentController@update');
Route::get('/comments/delete/{comment}', 'CommentController@destroy');