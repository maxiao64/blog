<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('/');
Route::get('/post/{id}', 'PostController@show')->name('post.show');
Route::get('/categories', 'PostController@categories')->name('post.categories');
Route::get('/category/{name}/{id}', 'PostController@categoryPost')->name('post.categoryPost');

Route::get('login/github', 'LoginController@redirectToProvider')->name('login.github');
Route::get('login', 'LoginController@login')->name('login');
Route::get('login/github/callback', 'LoginController@handleProviderCallback');
Route::get('logout','LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::post('comment', 'CommentController@comment')->name('comment');
});