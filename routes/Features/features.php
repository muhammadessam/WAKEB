<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/features')->group(function (){

    Route::get('/', 'FeatureController@index')->name('showAllFeatures');
    Route::get('/add', 'FeatureController@create')->name('showFeatureCreateView');
    Route::post('/add', 'FeatureController@store')->name('storeFeature');
    Route::get('/{feature}/edit', 'FeatureController@edit')->name('showEditForm');
    Route::patch('/{feature}', 'FeatureController@update')->name('featureUpdate');
    Route::delete('/','FeatureController@delete')->name('deleteFeature');
    Route::get('/deleted', 'FeatureController@showDeletedFeatures')->name('showDeletedFeatures');
    Route::post('/restore','FeatureController@restore')->name('restoreFeature');
    Route::delete('/deleted', 'FeatureController@forceDelete')->name('forceDeleteFeature');
});
