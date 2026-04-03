<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    protected $fillable = [
        'booking_id',
        'hours',
        'days',
        'driver_id',
        'special_instructions',
        'waiting_time',
        'toll_fee',
        'parking_fee',
        'night_charge',
        'additional_charges',
    ];

    protected $casts = [
        'hours' => 'integer',
        'days' => 'integer',
        'waiting_time' => 'integer',
        'toll_fee' => 'float',
        'parking_fee' => 'float',
        'night_charge' => 'float',
        'additional_charges' => 'float',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}