<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CarEnquiry;
use Illuminate\Http\Request;

class CarEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pickup_location' => 'nullable|string|max:255',
            'dropoff_location' => 'nullable|string|max:255',
            'pickup_date' => 'nullable|date',
            'pickup_time' => 'nullable',
            'adults' => 'nullable|integer|min:0',
            'children' => 'nullable|integer|min:0',
            'message' => 'nullable|string',
        ]);

        CarEnquiry::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been submitted successfully. We will contact you soon.');
    }
}
