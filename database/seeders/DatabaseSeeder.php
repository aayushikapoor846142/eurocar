<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
        // User::factory(10)->create();
  public function run()
    {
        $this->call([
            AdminUserSeeder::class,
            CitiesTableSeeder::class,

            // Add other seeders here
            CarSeeder::class,
            BlogSeeder::class,
        ]);
    }
}