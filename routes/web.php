<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::post('/contactUS', 'ContactController@contact')->name('contactUs');
Route::get('/migrate', function () {
    Artisan::call('migrate');
});
Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function () {

    require_once 'Users/users.php';
    require_once 'Products/products.php';
    require_once 'Features/features.php';
    require_once 'Services/services.php';
    require_once 'Solutions/solutions.php';
    require_once 'Usecases/useCases.php';
    require_once 'Sliders/slider.php';
    require_once 'contact/contact.php';
    require_once 'About/about.php';
});
