<?php
Route::prefix('/products')->group(function () {
    Route::get('/', 'ProductController@index')->name('showAllProducts');
    Route::patch('/{product}', 'ProductController@update')->name('updateProduct');
    Route::get('/add', 'ProductController@create')->name('createView');
    Route::post('/', 'ProductController@store')->name('storeUser');
    Route::get('/{product}/edit', 'ProductController@edit')->name('editView');
    Route::delete('/', 'ProductController@delete')->name('deleteUser');
    Route::get('/deleted', 'ProductController@showAllDeletedUsers')->name('getDeletedUsers');
    Route::post('/restore', 'ProductController@restoreUser')->name('restoreUser');
    Route::delete('/delete/foreDelete', 'ProductController@forceDelete')->name('forceDelete');
});
