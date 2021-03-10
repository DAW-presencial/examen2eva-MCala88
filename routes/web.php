<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenDocenteController;

Route::get('/', 'CenDocenteController@index')->name('homeIndex');

Route::post('/', 'CenDocenteController@store')->name('homeStore');

Route::post('/', 'CenDocenteController@show')->name('homeShow');

Route::post('/', 'CenDocenteController@edit')->name('homeEdit');

Route::post('/', 'CenDocenteController@edit')->name('homeUpdate');

Route::post('/', 'CenDocenteController@destroy')->name('homeDestroy');



Route::get('/', function () {
    return redirect()->route("cen_docentes/create");
});
