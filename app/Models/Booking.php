<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'pickup_location',
        'drop_location',
        'pickup_datetime',
        'trip_type',
        'status',
        'total_amount',
        'distance',
        'payment_status',
        'payment_intent_id',
        'notes',
    ];

    protected $casts = [
        'pickup_datetime' => 'datetime',
        'total_amount' => 'float',
        'distance' => 'float',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function detail(): HasOne
    {
        return $this->hasOne(BookingDetail::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}