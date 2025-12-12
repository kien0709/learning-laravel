<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    // /planets
    public function index()
    {
        // Eloquent ORM - eager load solar system relationship
        $planets = Planet::with('solarSystem')->get();

        return view('planets.index', [
            'planets' => $planets,
        ]);
    }

    // /planets/{id}
    public function show($id)
    {
        // Eloquent ORM - findOrFail geeft automatisch 404 als niet gevonden - eager load solar system
        $planet = Planet::with('solarSystem')->findOrFail($id);

        return view('planets.show', [
            'planet' => $planet,
        ]);

    }
}
