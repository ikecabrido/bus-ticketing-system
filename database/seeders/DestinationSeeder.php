<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::factory()->create([
            'place' => 'Cubao'
        ]);
        Destination::factory()->create([
            'place' => 'Baguio'
        ]);
        Destination::factory()->create([
            'place' => 'Pasay'
        ]);
        Destination::factory()->create([
            'place' => 'Tuguegarao'
        ]);
    }
}
