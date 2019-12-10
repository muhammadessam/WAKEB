<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('lang/{locale}', 'LangController@lang')->name('changeLang');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/products/{product}', 'HomeController@showProduct')->name('showProductFront');
Route::get('/services/{service}', 'HomeController@showService')->name('showServiceFront');
Route::get('/solutions/{solution}', 'HomeController@showSolution')->name('showSolutionFront');
Route::get('/useCases/{useCase}', 'HomeController@showUseCase')->name('showUseCaseFront');
Route::get('/allProduct', 'HomeController@showProducts')->name('showAllProductsFront');
Route::get('/allServices', 'HomeController@showServices')->name('showAllServicesFront');
Route::get('/allSolutions', 'HomeController@showSolutions')->name('showAllSolutionsFront');


Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function () {

    require_once 'Users/users.php';
    require_once 'Products/products.php';
    require_once 'Features/features.php';
    require_once 'Services/services.php';
    require_once 'Solutions/solutions.php';
    require_once 'Usecases/useCases.php';

});
