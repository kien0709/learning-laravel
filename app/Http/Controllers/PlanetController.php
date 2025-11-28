<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    // /planets
    public function index()
    {
        // Eloquent ORM
        $planets = Planet::all();

        return view('planets.index', [
            'planets' => $planets,
        ]);
    }

    // /planets/{id}
    public function show($id)
    {
        // Eloquent ORM - findOrFail geeft automatisch 404 als niet gevonden
        $planet = Planet::findOrFail($id);

        return view('planets.show', [
            'planet' => $planet,
        ]);

    }
}
