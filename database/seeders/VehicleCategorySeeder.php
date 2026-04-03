<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleCategory;

class VehicleCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Standard car',
                'vehicle_example' => 'Škoda Octavia Combi or similar',
                'max_passengers' => 4,
                'max_big_bags' => 3,
                'max_small_bags' => 3,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Premium car',
                'vehicle_example' => 'Mercedes E or similar',
                'max_passengers' => 3,
                'max_big_bags' => 2,
                'max_small_bags' => 2,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Standard VAN',
                'vehicle_example' => 'Renault Trafic or similar',
                'max_passengers' => 8,
                'max_big_bags' => 8,
                'max_small_bags' => 8,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Premium VAN',
                'vehicle_example' => 'Mercedes VAN',
                'max_passengers' => 7,
                'max_big_bags' => 7,
                'max_small_bags' => 7,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'VIP class',
                'vehicle_example' => 'Mercedes S or similar',
                'max_passengers' => 3,
                'max_big_bags' => 2,
                'max_small_bags' => 2,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Mercedes Sprinter 8pax',
                'vehicle_example' => 'Mercedes Sprinter',
                'max_passengers' => 8,
                'max_big_bags' => 12,
                'max_small_bags' => 12,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Mercedes Sprinter 20pax',
                'vehicle_example' => 'Mercedes Sprinter',
                'max_passengers' => 20,
                'max_big_bags' => 20,
                'max_small_bags' => 20,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'Private bus 26-53pax',
                'vehicle_example' => 'Private bus',
                'max_passengers' => 53,
                'max_big_bags' => 53,
                'max_small_bags' => 53,
                'description' => 'Each passenger is allowed one large bag (29" x 21" x 11" / 74 x 53 x 28 cm) and one small bag (22" x 14" x 9" / 56 x 36 x 23 cm). If you have oversized luggage or are unsure if your luggage will fit, contact us.',
                'is_active' => true,
                'sort_order' => 8,
            ],
        ];

        foreach ($categories as $category) {
            VehicleCategory::create($category);
        }
    }
}
