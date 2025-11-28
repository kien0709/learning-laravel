<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

Route::get('/', function () {
    return redirect('/planets');
});

<<<<<<< HEAD
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{id}', [PlanetController::class, 'show'])->whereNumber('id');

=======
Route::get('/planeten', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{planet}', [PlanetController::class, 'show']);
>>>>>>> a9202bf96ded3f29e1693bcd4716164375b2f0a3
