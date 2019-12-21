<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/about')->group(function () {
    Route::get('/', 'AboutController@index')->name('getAboutEditPage');
    Route::post('/', 'AboutController@save')->name('saveAbout');
});
