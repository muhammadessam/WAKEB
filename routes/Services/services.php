<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/services')->group(function () {

    Route::get('/', 'ServiceController@index')->name('showAllServices');
    Route::get('/add', 'ServiceController@create')->name('serviceCreateView');
    Route::post('/', 'ServiceController@store')->name('storeService');
    Route::get('/{service}/edit', 'ServiceController@edit')->name('serviceEditView');
    Route::patch('/{service}', 'ServiceController@update')->name('updateService');
    Route::delete('/', 'ServiceController@delete')->name('deleteService');
    Route::get('/deleted', 'ServiceController@showAllDeletedServices')->name('getDeletedServices');
    Route::post('/restore', 'ServiceController@restoreService')->name('restoreService');
    Route::delete('/delete/foreDelete', 'ServiceController@forceDelete')->name('serviceForceDelete');
    Route::get('/{service}/show', 'ServiceController@show')->name('showSingleService');

});
