<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SolarSystem;
use App\Models\Planet;

class SolarSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Maak een zonnestelsel aan
        $solarSystem = SolarSystem::firstOrCreate([
            'name' => 'Zonnestelsel'
        ]);

        // Koppel alle planeten aan dit zonnestelsel
        Planet::whereNull('solar_system_id')->update([
            'solar_system_id' => $solarSystem->id
        ]);
    }
}
