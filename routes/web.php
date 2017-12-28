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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Route::group(['middleware' => ['web']], function(){
  Route::group(['prefix' => 'auth'], function(){
    Route::get('login', 'LoginController@login');
    Route::post('login', 'LoginController@attempt');

    Route::get('register', 'LoginController@register');
    Route::post('register', 'LoginController@create');

    Route::get('logout', 'LoginController@logout');
  });

  Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('/', 'DashboardController@index');
  });
});
