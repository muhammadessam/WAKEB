<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/solutions')->group(function (){
    Route::get('/', 'SolutionController@index')->name('showAllSolutions');
});
