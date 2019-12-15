<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/contact')->group(function () {

    Route::get('/', 'ContactController@showAll')->name('contactShowAll');
    Route::get('/{id}/show', 'ContactController@show')->name('showSingleMessage');
    Route::post('/{id}/read', 'ContactController@read')->name('markAsRead');
});
