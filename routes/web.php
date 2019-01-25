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

Route::get('/', 'HomeController@ReWelcome');
//Route::view('/','welcome');


Route::get('hello', function(){
    return view('hello');
});

Route::get('helloRe', function(){
    return redirect('hello');
});

Route::get('greeting/{name?}','GreetingController@greeting');

Route::get('posts','PostController@index');
Route::get('posts/{ids}','PostController@show');
//Route::view('posts','posts.show');
