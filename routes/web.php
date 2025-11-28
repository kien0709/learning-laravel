<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/planets');
});

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{id}', [PlanetController::class, 'show'])->whereNumber('id');

