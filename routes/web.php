<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/planeten', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/planets', function () {
    $allPlanets = [
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
    
    // Check if planet parameter exists using request() helper
    if (request()->has('planet')) {
        $requestedPlanet = request('planet');
        
        // Filter planets based on the planet parameter
        $planets = array_filter($allPlanets, function($planet) use ($requestedPlanet) {
            return strtolower($planet['name']) === strtolower($requestedPlanet);
        });
        
        // Reset array keys after filtering
        $planets = array_values($planets);
    } else {
        // No filter, show all planets
        $planets = $allPlanets;
    }
    
    return view('planets', compact('planets'));
});
