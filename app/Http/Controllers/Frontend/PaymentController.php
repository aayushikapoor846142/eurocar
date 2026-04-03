<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // In PaymentController.php
    public function create(Booking $booking)
    {
        return view('payments.create', compact('booking'));
    }

    public function process(Request $request, Booking $booking)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $booking->total_amount * 100, // Convert to cents
                'currency' => 'usd',
                'metadata' => ['booking_id' => $booking->id],
            ]);

            // Save payment intent ID
            $booking->update(['payment_intent_id' => $paymentIntent->id]);

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        $booking = Booking::where('user_id', auth()->id())
            ->where('status', 'pending')
            ->latest()
            ->firstOrFail();

        // Update booking status
        $booking->update(['status' => 'confirmed']);

        // Send confirmation email
        // Mail::to(auth()->user())->send(new BookingConfirmation($booking));

        return view('bookings.confirmation', compact('booking'));
    }
}
