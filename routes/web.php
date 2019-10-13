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

//public page

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('/profile/{uname}', 'PagesController@urname');

Auth::routes();

//admin page
Route::get('admin', 'PostsController@index');

Route::get('admin/create', 'PostsController@create');

Route::get('/profile/{uname}/{id}', 'PostsController@singlepost');

Route::get('admin/{id}/edit', 'PostsController@edit');

Route::post('admin/{id}/update', 'PostsController@update');

Route::delete('admin/{id}/delete', 'PostsController@destroy');




//socialite
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');

