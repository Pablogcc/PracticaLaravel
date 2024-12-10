<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidarId;

Route::prefix('v1')->group(function () {

    Route::resource('alumno', 'Api\V1\AlumnoController')->middleware(ValidarId::class);
    Route::post('alumno/{id}', 'Api\V1\AlumnoController@update')->middleware(ValidarId::class);
    Route::delete('alumno/{id}', 'Api\V1\AlumnoController@destroy')->middleware(ValidarId::class);
    Route::put('alumno/{id}', 'Api\V1\AlumnoController@update')->middleware(ValidarId::class);
});
