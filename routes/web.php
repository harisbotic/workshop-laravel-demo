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

Route::get('/', 'BlogController@index');
Route::get('/posts/{post}', 'BlogController@post');
Route::post('/posts/{post}/comment', 'BlogController@comment')->middleware('auth');

Auth::routes();
Route::get('/profile', 'Auth\\ProfileController@index')->middleware('auth');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('/posts', 'PostController');
    Route::put('/posts/{post}/publish', 'PostController@publish')->middleware('admin');
    Route::resource('/categories', 'CategoryController', ['except' => ['show']]);
    Route::resource('/tags', 'TagController', ['except' => ['show']]);
    Route::resource('/comments', 'CommentController', ['only' => ['index', 'destroy']]);
    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);
});

Route::view('/vjezbe/playground-blade', 'vjezbe/playground-blade');
Route::view('/vjezbe/playground-php', 'vjezbe/playground-php');
Route::view('/vjezbe/playground-html', 'vjezbe/playground-html');
Route::view('/vjezbe/zadatak-0', 'vjezbe/zadatak-0');
Route::view('/vjezbe/zadatak-1', 'vjezbe/zadatak-1');
Route::view('/vjezbe/zadatak-1-rjesenje', 'vjezbe/zadatak-1-rjesenje');
Route::view('/vjezbe/zadatak-2', 'vjezbe/zadatak-2');
Route::view('/vjezbe/zadatak-2-rjesenje', 'vjezbe/zadatak-2-rjesenje');
Route::view('/vjezbe/zadatak-3', 'vjezbe/zadatak-3');
Route::view('/vjezbe/zadatak-3-rjesenje', 'vjezbe/zadatak-3-rjesenje');
Route::view('/vjezbe/zadatak-4', 'vjezbe/zadatak-4');
Route::view('/vjezbe/zadatak-4-rjesenje', 'vjezbe/zadatak-4-rjesenje');