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

Route::get('/', 'HomeController@ReWelcome')->name('home.index');
//Route::view('/','welcome');
Route::get('posts','PostController@index')->name('posts.index');
//Route::get('posts/{id}','PostController@show')->name('posts.show');
Route::get('posts/{post}','PostController@show')->name('posts.show');

Route::view('about','about.index')->name('about.index');
//Route::view('posts','posts.show');


//Route::get('hello', function(){
//    return view('hello');
//});
//
//Route::get('helloRe', function(){
//    return redirect('hello');
//});
//
//Route::get('greeting/{name?}','GreetingController@greeting');

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');

    Route::get('posts', 'PostController@index')->name('admin.posts.index');//導向index
    Route::get('posts/create', 'PostController@create')->name('admin.posts.create');//導向新文章頁面
    Route::post('posts', 'PostController@store')->name('admin.posts.store');//新增文章
    Route::get('posts/{post}/edit', 'PostController@edit')->name('admin.posts.edit');//導向編輯文章頁面
    Route::patch('posts/{post}', 'PostController@update')->name('admin.posts.update');//更新文章
    Route::delete('posts/{post}', 'PostController@destroy')->name('admin.posts.destroy');//刪除文章
});

