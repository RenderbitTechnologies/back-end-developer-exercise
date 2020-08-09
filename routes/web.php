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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard

// profile
Route::view('profile','dashboard.dash_profile');
Route::POST('/update/{id}','HomeController@update');
// Blog
Route::view('/blog','dashboard.dash_blog');
Route::get('/blog/','blogcontroller@select');
Route::get('/update_status/{id}','blogcontroller@update');    //status changing
Route::get('delete_blog/{id}','blogcontroller@delete');

// Comments
Route::view('comments','dashboard.dash_comments');
Route::POST('comments_add/{id}','commentcontroller@add');
Route::get('comments','commentcontroller@select');
Route::get('delete_comment/{id}','commentcontroller@delete');

// contactus
Route::view('contactus','dashboard.dash_contactus');
Route::POST('contactus','contactcontroller@insert');
Route::get('contactus','contactcontroller@select');
Route::get('/delete_msg/{id}','contactcontroller@delete');

// add new blog
Route::view('add_blog','dashboard.add_blog');
Route::POST('/add','blogcontroller@add');

// Homepage
Route::get('/', function () {
        return view('welcome');
    });
Route::view('homepage','homepage');
Route::get('/homepage','blogcontroller@home_select');
// Route::get('/homepage','commentcontroller@selectcomment');