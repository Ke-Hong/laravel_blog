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

Route::get('greeting/{name?}',function ($name = 'guy'){
    return 'hello, '.$name;
});
