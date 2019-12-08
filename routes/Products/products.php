<?php

Route::prefix('/products')->group(function () {

    Route::get('/', 'ProductController@index')->name('showAllProducts');
    Route::get('/add', 'ProductController@create')->name('productCreateView');
    Route::post('/', 'ProductController@store')->name('storeProduct');
    Route::get('/{product}/edit', 'ProductController@edit')->name('productEditView');
    Route::patch('/{product}', 'ProductController@update')->name('updateProduct');
    Route::delete('/', 'ProductController@delete')->name('deleteProduct');
    Route::get('/deleted', 'ProductController@showAllDeletedProducts')->name('getDeletedProducts');
    Route::post('/restore', 'ProductController@restoreProduct')->name('restoreProduct');
    Route::delete('/delete/foreDelete', 'ProductController@forceDelete')->name('productForceDelete');
    Route::get('/{product}/show', 'ProductController@show')->name('showSingleProduct');

});
