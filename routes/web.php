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
Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function () {

    require_once 'Users/users.php';
    require_once 'Products/products.php';
    require_once 'Features/features.php';


});
