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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/{locale}', 'LangController@lang')->name('changeLang');
Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->group(function () {

        Route::get('/users', 'UserController@index')->name('showAllUsers');
        Route::get('/users/add', 'UserController@create')->name('createView');
        Route::post('/users', 'UserController@store')->name('storeUser');
        Route::get('/users/{user}/edit', 'UserController@edit')->name('editView');
        Route::patch('/users/{user}', 'UserController@update')->name('updateUser');
        Route::delete('/users/{user}', 'UserController@delete')->name('deleteUser');
    });

});
