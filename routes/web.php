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
    return view('auth.login');
});

Auth::routes();

Route::get('lang/{locale}', 'LangController@lang')->name('changeLang');

Route::group(['middleware'=>'auth', 'prefix'=>'/admin'], function (){

    Route::get('/users', 'UserController@index')->name('showAllUsers');
    Route::get('/users/add', 'UserController@create')->name('createView');
    Route::post('/users', 'UserController@store')->name('storeUser');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('editView');
    Route::patch('/users/{user}', 'UserController@update')->name('updateUser');
    Route::delete('/users', 'UserController@delete')->name('deleteUser');
    Route::get('/users/deleted', 'UserController@showAllDeletedUsers')->name('getDeletedUsers');
    Route::post('/users/restore', 'UserController@restoreUser')->name('restoreUser');
    Route::delete('/users/delete/foreDelete', 'UserController@forceDelete')->name('forceDelete');
});
