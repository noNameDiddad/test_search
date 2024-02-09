<?php

namespace Database\Seeders;

use App\Models\Realty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $realty = [
            ['name' => 'The Victoria',      'price' => '250000', 'bedrooms_count' => '3', 'bathrooms_count' => '2', 'storeys_count' => '2', 'garages_count' => '2'],
            ['name' => 'The Xavier',        'price' => '300000', 'bedrooms_count' => '4', 'bathrooms_count' => '3', 'storeys_count' => '1', 'garages_count' => '2'],
            ['name' => 'The Como',          'price' => '200000', 'bedrooms_count' => '2', 'bathrooms_count' => '1', 'storeys_count' => '1', 'garages_count' => '1'],
            ['name' => 'Green Meadows',     'price' => '350000', 'bedrooms_count' => '5', 'bathrooms_count' => '3', 'storeys_count' => '2', 'garages_count' => '3'],
            ['name' => 'The Geneva',        'price' => '400000', 'bedrooms_count' => '6', 'bathrooms_count' => '3', 'storeys_count' => '2', 'garages_count' => '2'],
            ['name' => 'Lakeview Estatesa', 'price' => '400000', 'bedrooms_count' => '6', 'bathrooms_count' => '3', 'storeys_count' => '2', 'garages_count' => '2'],
            ['name' => 'The Clifton',       'price' => '400000', 'bedrooms_count' => '6', 'bathrooms_count' => '3', 'storeys_count' => '2', 'garages_count' => '2'],
            ['name' => 'Hilltop',           'price' => '400000', 'bedrooms_count' => '6', 'bathrooms_count' => '3', 'storeys_count' => '2', 'garages_count' => '2'],
        ];

        Realty::insert($realty);

        Realty::factory()->count(100)->create();
    }
}
