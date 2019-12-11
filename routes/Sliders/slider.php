<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/sliders')->group(function () {

    Route::get('/','Slidercontroller@index')->name('sliderShowAll');
    Route::get('/add', 'Slidercontroller@create')->name('sliderCreateView');
    Route::post('/', 'Slidercontroller@store')->name('sliderStore');
    Route::get('/{slider}/edit', 'Slidercontroller@edit')->name('sliderEditView');
    Route::patch('/{slider}', 'Slidercontroller@update')->name('sliderUpdate');
    Route::delete('/', 'Slidercontroller@delete')->name('sliderDelete');
    Route::get('/deleted', 'Slidercontroller@showAllDeletedsliders')->name('sliderShowDeleted');
    Route::post('/restore', 'Slidercontroller@restoreSlider')->name('restoreSlider');
    Route::delete('/delete/foreDelete', 'Slidercontroller@forceDelete')->name('sliderForceDelete');

//    Route::get('/{product}/show', 'ProductController@show')->name('showSingleProduct');

});
