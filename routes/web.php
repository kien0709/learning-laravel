<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/planeten', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{planet}', [PlanetController::class, 'show']);
