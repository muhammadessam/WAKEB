<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/contact')->group(function () {

    Route::get('/', 'ContactController@show')->name('contactShowAll');
});
