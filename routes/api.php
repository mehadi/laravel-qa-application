<?php

use Illuminate\Http\Request;

Route::prefix('question')->group(function () {
    Route::get('/', 'API\ApiController@index');
    Route::get('all', 'API\ApiController@index');
    Route::post('update', 'API\ApiController@update');
});
