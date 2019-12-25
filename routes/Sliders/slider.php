<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/sliders')->group(function () {

    Route::get('/','SliderController@index')->name('sliderShowAll');
    Route::get('/add', 'SliderController@create')->name('sliderCreateView');
    Route::post('/', 'SliderController@store')->name('sliderStore');
    Route::get('/{slider}/edit', 'SliderController@edit')->name('sliderEditView');
    Route::patch('/{slider}', 'SliderController@update')->name('sliderUpdate');
    Route::delete('/', 'SliderController@delete')->name('sliderDelete');
    Route::get('/deleted', 'SliderController@showAllDeletedsliders')->name('sliderShowDeleted');
    Route::post('/restore', 'SliderController@restoreSlider')->name('restoreSlider');
    Route::delete('/delete/foreDelete', 'SliderController@forceDelete')->name('sliderForceDelete');

//    Route::get('/{product}/show', 'ProductController@show')->name('showSingleProduct');

});
