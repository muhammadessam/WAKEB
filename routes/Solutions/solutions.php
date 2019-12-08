<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/solutions')->group(function (){
    Route::get('/', 'SolutionController@index')->name('showAllSolutions');
    Route::get('/add', 'SolutionController@create')->name('solutionCreateView');
    Route::post('/', 'SolutionController@store')->name('solutionStore');

//    Route::get('/{product}/edit', 'ProductController@edit')->name('productEditView');
//    Route::patch('/{product}', 'ProductController@update')->name('updateProduct');
//    Route::delete('/', 'ProductController@delete')->name('deleteProduct');
//    Route::get('/deleted', 'ProductController@showAllDeletedProducts')->name('getDeletedProducts');
//    Route::post('/restore', 'ProductController@restoreProduct')->name('restoreProduct');
//    Route::delete('/delete/foreDelete', 'ProductController@forceDelete')->name('productForceDelete');
//    Route::get('/{product}/show', 'ProductController@show')->name('showSingleProduct');
});
