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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirct/{service}', 'Socialcontroller@redirect');
Route::get('/callback/{service}', 'Socialcontroller@callbacl');


//['verify'=>true]
//->middleware('verified')
//1152864505253885
//3c0f373ff6fbb1be86015e2fe4785d39
