<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; // BELANGRIJK

class PlanetController extends Controller
{
    // /planets
    public function index()
    {
        // Query Builder met DB class
        $planets = DB::table('planets')->get();

        return view('planets.index', [
            'planets' => $planets,
        ]);
    }

    // /planets/{id}
    public function show($id)
    {
        $planet = DB::table('planets')
            ->where('id', $id)
            ->first();

        // eventueel simpele 404
        if (! $planet) {
            abort(404);
        }

        return view('planets.show', [
            'planet' => $planet,
        ]);

    }
}
