<?php
Route::prefix('/users')->group(function () {
    Route::get('/', 'UserController@index')->name('showAllUsers');
    Route::get('/add', 'UserController@create')->name('createView');
    Route::post('/', 'UserController@store')->name('storeUser');
    Route::get('/{user}/edit', 'UserController@edit')->name('editView');
    Route::patch('/{user}', 'UserController@update')->name('updateUser');
    Route::delete('/', 'UserController@delete')->name('deleteUser');
    Route::get('/deleted', 'UserController@showAllDeletedUsers')->name('getDeletedUsers');
    Route::post('/restore', 'UserController@restoreUser')->name('restoreUser');
    Route::delete('/delete/foreDelete', 'UserController@forceDelete')->name('forceDelete');
});
