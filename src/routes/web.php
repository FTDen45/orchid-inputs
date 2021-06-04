<?php

Route::group(['namespace' => 'Easy\OrchidInputs\App\Http\Controllers'],function (){
    Route::get('orchid-inputs', 'OrchidInputsController@index')->name('orchid-inputs');
    Route::post('orchid-inputs', 'OrchidInputsController@send');
});
