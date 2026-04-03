<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'booking_id',
        'transaction_id',
        'amount',
        'payment_method',
        'status',
        'payment_gateway',
        'gateway_transaction_id',
        'currency',
        'payment_details',
        'refund_amount',
        'refund_reason',
    ];

    protected $casts = [
        'amount' => 'float',
        'refund_amount' => 'float',
        'payment_details' => 'array',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}