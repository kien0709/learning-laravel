<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    private array $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    public function index()
    {
        $planets = $this->planets;
        return view('planets', compact('planets'));
    }

    public function show(string $planet)
    {
        $foundPlanet = null;
        foreach ($this->planets as $planetData) {
            if (strtolower($planetData['name']) === strtolower($planet)) {
                $foundPlanet = $planetData;
                break;
            }
        }

        if (!$foundPlanet) {
            abort(404, 'Planet not found');
        }

        $planets = [$foundPlanet];
        return view('planets', compact('planets'));
    }
}
