<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'car_id' => 'required|exists:cars,id',
        'pickup_location' => 'required|string|max:255',
        'drop_location' => 'required|string|max:255',
        'pickup_date' => 'required|date',
        'pickup_time' => 'required',
        'trip_type' => 'required|in:hourly,daily,multiday',
        'hours' => 'required_if:trip_type,hourly|integer|min:1',
        'days' => 'required_if:trip_type,daily,multiday|integer|min:1',
    ]);

    // Calculate fare based on trip type and duration
    $car = Car::findOrFail($validated['car_id']);
    $fare = $this->calculateFare($car, $validated);

    // Create booking
    $booking = Booking::create([
        'user_id' => auth()->id(),
        'car_id' => $car->id,
        'pickup_location' => $validated['pickup_location'],
        'drop_location' => $validated['drop_location'],
        'pickup_datetime' => $validated['pickup_date'] . ' ' . $validated['pickup_time'],
        'trip_type' => $validated['trip_type'],
        'status' => 'pending',
        'total_amount' => $fare,
    ]);

    // Create booking details
    if ($validated['trip_type'] === 'hourly') {
        $booking->details()->create([
            'hours' => $validated['hours'],
        ]);
    } else {
        $booking->details()->create([
            'days' => $validated['days'],
        ]);
    }

    return redirect()->route('payments.create', $booking);
}

private function calculateFare($car, $data)
{
    $baseFare = $car->base_fare;
    $distanceRate = $car->per_km_rate;
    
    // Calculate distance between locations (you'll need to implement this)
    $distance = $this->calculateDistance($data['pickup_location'], $data['drop_location']);
    
    // Calculate fare based on trip type
    switch ($data['trip_type']) {
        case 'hourly':
            return ($baseFare + ($distance * $distanceRate)) * $data['hours'];
        case 'daily':
            return ($baseFare + ($distance * $distanceRate)) * $data['days'];
        case 'multiday':
            return ($baseFare + ($distance * $distanceRate)) * $data['days'] * 0.9; // 10% discount for multi-day
        default:
            return $baseFare;
    }
}
}
