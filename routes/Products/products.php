<?php
Route::prefix('/products')->group(function () {
    Route::get('/', 'ProductController@index')->name('showAllProducts');
    Route::get('/add', 'ProductController@create')->name('productCreateView');
    Route::post('/', 'ProductController@store')->name('storeProduct');
    Route::get('/{product}/edit', 'ProductController@edit')->name('productEditView');
    Route::patch('/{product}', 'ProductController@update')->name('updateProduct');


});
