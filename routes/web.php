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
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');


Route::get('about','PagesController@getAbout') ;

Route::get('/', 'PagesController@getIndex');

Route::get('/home', 'PagesController@getIndex');

Route::resource('posts','PostsController');

Route::get('blog',array('uses'=>'BlogController@getIndex','as'=>'blog.index'));

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingleSlug'])->where('slug', '[\w\d\-\_]+');

Route::get('/users/{id}', 'UserController@getUser');
//Authentication Routes

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout','Auth\LoginController@logout' );


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');




// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 
 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Auth::routes();

//comments

 Route::post('comments/{post_id}',['uses' => 'CommentsController@store','as' => 'comments.store']);


 Route::get('login/google', 'GoogleController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'GoogleController@handleProviderCallback');