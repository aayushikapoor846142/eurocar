<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vehicle_example',
        'max_passengers',
        'max_big_bags',
        'max_small_bags',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'max_passengers' => 'integer',
        'max_big_bags' => 'integer',
        'max_small_bags' => 'integer',
        'sort_order' => 'integer',
    ];
}
