<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plane;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Generate 10 dummy planes
        for ($i = 0; $i < 10; $i++) {
            Plane::create([
                'name' => 'Plane ' . ($i + 1),
                'manufacturer' => 'Boeing',
                'model' => '747',
                'year' => 2000 + $i,
                'serial_number' => 'ABC123' . $i,
                'description' => 'Description of Plane ' . ($i + 1),
                'price' => 1000000 + ($i * 10000),
                'is_available' => true,
            ]);
        }
    }
}
