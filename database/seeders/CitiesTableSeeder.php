<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $cities = [
        ['name' => 'New York', 'country' => 'United States'],
        ['name' => 'London', 'country' => 'United Kingdom'],
        ['name' => 'Paris', 'country' => 'France'],
        ['name' => 'Vienna', 'country' => 'Austria'],
        ['name' => 'Prague', 'country' => 'Czech Republic'],
        ['name' => 'Budapest', 'country' => 'Hungary'],
        ['name' => 'Bratislava', 'country' => 'Slovakia'],
        ['name' => 'Munich', 'country' => 'Germany'],
        ['name' => 'Salzburg', 'country' => 'Austria'],
        ['name' => 'Brno', 'country' => 'Czech Republic'],
    ];

    foreach ($cities as $city) {
        \App\Models\City::create($city);
    }
}
}
