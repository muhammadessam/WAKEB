<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/usecases')->group(function (){

    Route::get('/', 'UseCaseController@index')->name('useCasesShowAll');
    Route::get('/add', 'UseCaseController@create')->name('usecasesCreateView');
    Route::post('/add', 'UseCaseController@store')->name('usecasesStore');
    Route::get('/{useCase}/edit', 'UseCaseController@edit')->name('usecaseEdit');
    Route::patch('/{useCase}', 'UseCaseController@update')->name('usecaseUpdate');
    Route::delete('/','UseCaseController@delete')->name('usecaseDelete');
    Route::get('/deleted', 'UseCaseController@deleted')->name('usecasesshowDeleted');
    Route::post('/restore','UseCaseController@restore')->name('usecaseRestore');
    Route::delete('/deleted', 'UseCaseController@forceDelete')->name('usecaseForceDelete');

});
