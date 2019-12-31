<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Auth::routes();


Route::get('lang/{locale}', 'LangController@lang')->name('changeLang');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/products/{productName}', 'HomeController@showProduct')->name('showProductFront');
Route::get('/services/{serviceName}', 'HomeController@showService')->name('showServiceFront');
Route::get('/solutions/{solutionName}', 'HomeController@showSolution')->name('showSolutionFront');
Route::get('/useCases/{useCaseName}', 'HomeController@showUseCase')->name('showUseCaseFront');
Route::get('/allProduct', 'HomeController@showProducts')->name('showAllProductsFront');
Route::get('/allServices', 'HomeController@showServices')->name('showAllServicesFront');
Route::get('/allSolutions', 'HomeController@showSolutions')->name('showAllSolutionsFront');
Route::post('/contactUS', 'ContactController@contact')->name('contactUs');
Route::get('/migrate', function () {
    Artisan::call('migrate');
    dd('Migrated');
});
Route::get('/migraterollback', function () {
    Artisan::call('migrate:rollback');
    dd('Migrated');

});
Route::get('/migrateFresh', function () {
    Artisan::call('migrate:fresh');
    dd('Migrated');

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
    require_once 'Settings/settings.php';
});
