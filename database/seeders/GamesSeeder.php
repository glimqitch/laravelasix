<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Game::create([
            'title' => 'Sonic the Hedgehog',
            'platform' => 'Sega Genesis',
            'release_year' => 1991,
            'description' => 'El primer joc de Sonic on lluites contra el Dr. Robotnik.',
            'rating' => 9.0
        ]);

        \App\Models\Game::create([
            'title' => 'Sonic Adventure',
            'platform' => 'Dreamcast',
            'release_year' => 1998,
            'description' => 'Un Sonic en 3D amb un món obert i múltiples personatges jugables.',
            'rating' => 8.5
        ]);
    }
}

