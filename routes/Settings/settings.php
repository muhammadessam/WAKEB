<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/settings')->group(function () {
    Route::get('/', 'SettingsController@index')->name('getSettingsPage');
    Route::post('/', 'SettingsController@save')->name('saveSettings');
});
