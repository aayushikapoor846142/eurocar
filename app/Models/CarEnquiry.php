<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarEnquiry extends Model
{
    protected $fillable = [
        'car_id',
        'name',
        'email',
        'phone',
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'pickup_time',
        'adults',
        'children',
        'message',
        'status',
    ];

    protected $casts = [
        'pickup_date' => 'date',
        'pickup_time' => 'datetime',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
