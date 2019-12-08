<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/solutions')->group(function () {

    Route::get('/', 'SolutionController@index')->name('showAllSolutions');
    Route::get('/add', 'SolutionController@create')->name('solutionCreateView');
    Route::post('/', 'SolutionController@store')->name('solutionStore');
    Route::get('/{solution}/edit', 'SolutionController@edit')->name('solutionEditView');
    Route::patch('/{solution}', 'SolutionController@update')->name('solutionUpdate');
    Route::delete('/', 'SolutionController@delete')->name('solutionDelete');
    Route::get('/deleted', 'SolutionController@showDeleted')->name('solutionDeleted');
    Route::post('/restore', 'SolutionController@restore')->name('solutionRestore');
    Route::delete('/delete/foreDelete', 'SolutionController@forceDelete')->name('solutionForceDelete');

});
