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

use App\model\offer;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/redirct/{service}', 'Socialcontroller@redirect');
Route::get('/callback/{service}', 'Socialcontroller@callbacl');

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function(){
        Route::group(['prefix'=>'offers'],function (){
            Route::get('ws', 'C@show');
            Route::post('store', 'C@store');
            Route::get('all', 'C@get');


        });


});





//->middleware('verified')
//1152864505253885
//3c0f373ff6fbb1be86015e2fe4785d39
//https://www.freeprivacypolicy.com/live/679b29ef-865f-4f6c-b736-29e524c5e05f
//autofocus

