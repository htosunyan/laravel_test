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
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index');
Route::get('/users', 'HomeController@users');
Route::get('/new-post', 'HomeController@newPost');
Route::get('/my-post', 'HomeController@myPosts');
Route::get('/posts', 'HomeController@posts');
Route::post('/add-post', 'HomeController@addPost');
Route::post('/post/edit/{id}', 'HomeController@addPost');
Route::get('/post/edit/{id}', 'HomeController@newPost');
Route::get('/post/remove/{id}', 'HomeController@removePost');