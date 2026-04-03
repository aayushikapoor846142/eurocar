<?php

// database/factories/CarFactory.php
namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'BMW', 'Mercedes', 'Audi', 'Ford']),
            'model' => $this->faker->word,
            'year' => $this->faker->numberBetween(2015, 2023),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'seats' => $this->faker->numberBetween(2, 8),
            'luggage' => $this->faker->numberBetween(1, 4),
            'driver_language' => $this->faker->randomElement(['English', 'German', 'French', 'Spanish']),
            'image' => null, // or provide a default image path
            'is_featured' => $this->faker->boolean(30),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}