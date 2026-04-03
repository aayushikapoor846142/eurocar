<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        $cars = [
            // Transfer Category
            [
                'description' => 'Luxury sedan with premium features and comfortable interior.',
                'make' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'year' => 2023,
                'price' => 120.00,
                'discount' => 10.00,
                'seats' => 5,
                'luggage' => 3,
                'driver_language' => 'English, German',
                'category' => 'transfer',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/car-pic1.png'
            ],
            [
                'description' => 'Sporty luxury sedan with excellent driving dynamics.',
                'make' => 'BMW',
                'model' => '5 Series',
                'year' => 2023,
                'price' => 115.00,
                'discount' => 5.00,
                'seats' => 5,
                'luggage' => 4,
                'driver_language' => 'English, German',
                'category' => 'transfer',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/standard-car.png'
            ],
            
            // Day Trip Category
            [
                'description' => 'Premium executive car with advanced technology features.',
                'make' => 'Audi',
                'model' => 'A6',
                'year' => 2023,
                'price' => 110.00,
                'discount' => 8.00,
                'seats' => 5,
                'luggage' => 3,
                'driver_language' => 'English, German, French',
                'category' => 'daytrip',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/Economy-Car.png'
            ],
            [
                'description' => 'Comfortable family car with spacious interior.',
                'make' => 'Volkswagen',
                'model' => 'Passat',
                'year' => 2023,
                'price' => 85.00,
                'discount' => 5.00,
                'seats' => 5,
                'luggage' => 4,
                'driver_language' => 'English, German',
                'category' => 'daytrip',
                'is_featured' => false,
                'is_active' => true,
                'image' => 'assets/images/standard-car.png'
            ],
            
            // Multiday Trip Category
            [
                'description' => 'Luxury MPV with premium comfort and space.',
                'make' => 'Mercedes-Benz',
                'model' => 'V-Class',
                'year' => 2023,
                'price' => 150.00,
                'discount' => 15.00,
                'seats' => 8,
                'luggage' => 6,
                'driver_language' => 'English, German, French',
                'category' => 'multidaytrip',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/car-pic1.png'
            ],
            [
                'description' => 'Premium SUV with seven seats and advanced features.',
                'make' => 'Audi',
                'model' => 'Q7',
                'year' => 2023,
                'price' => 140.00,
                'discount' => 10.00,
                'seats' => 7,
                'luggage' => 5,
                'driver_language' => 'English, German, Italian',
                'category' => 'multidaytrip',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/Economy-Car.png'
            ],
            [
                'description' => 'Spacious van ideal for group transportation.',
                'make' => 'Volkswagen',
                'model' => 'Caravelle',
                'year' => 2023,
                'price' => 130.00,
                'discount' => 0,
                'seats' => 9,
                'luggage' => 8,
                'driver_language' => 'English, German',
                'category' => 'multidaytrip',
                'is_featured' => false,
                'is_active' => true,
                'image' => 'assets/images/standard-car.png'
            ],
            
            // Hourly Rental Category
            [
                'description' => 'Reliable and fuel-efficient sedan with modern features.',
                'make' => 'Toyota',
                'model' => 'Camry',
                'year' => 2023,
                'price' => 90.00,
                'discount' => 0,
                'seats' => 5,
                'luggage' => 3,
                'driver_language' => 'English, Japanese',
                'category' => 'hourly',
                'is_featured' => false,
                'is_active' => true,
                'image' => 'assets/images/Economy-Car.png'
            ],
            [
                'description' => 'Ultimate luxury sedan with cutting-edge technology.',
                'make' => 'BMW',
                'model' => '7 Series',
                'year' => 2023,
                'price' => 180.00,
                'discount' => 20.00,
                'seats' => 5,
                'luggage' => 4,
                'driver_language' => 'English, German, Spanish',
                'category' => 'hourly',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/car-pic1.png'
            ],
            [
                'description' => 'Reliable minibus for larger groups and airport transfers.',
                'make' => 'Toyota',
                'model' => 'Hiace',
                'year' => 2023,
                'price' => 160.00,
                'discount' => 25.00,
                'seats' => 12,
                'luggage' => 10,
                'driver_language' => 'English, Japanese, Chinese',
                'category' => 'hourly',
                'is_featured' => true,
                'is_active' => true,
                'image' => 'assets/images/standard-car.png'
            ]
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}