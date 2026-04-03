<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\City;

class PageController extends Controller
{
    // Authentication Pages
    public function signIn()
    {
        return view('frontend.auth.signin');
    }

    public function signUp()
    {
        return view('frontend.auth.signup');
    }

    public function getStarted()
    {
        return view('frontend.get-started');
    }

    // Car Related Pages
    public function carsGrid()
    {
        $cars = Car::with('vehicleCategory')->where('is_active', true)->paginate(12);
        $cities = City::pluck('name', 'id');
        return view('frontend.cars.grid', compact('cars', 'cities'));
    }

    public function carsGrid4()
    {
        $cars = Car::with('vehicleCategory')->where('is_active', true)->paginate(12);
        $cities = City::pluck('name', 'id');
        return view('frontend.cars.grid-4', compact('cars', 'cities'));
    }

    public function carsGridHourly()
    {
        $cars = Car::with('vehicleCategory')->where('is_active', true)->where('category', 'hourly')->paginate(12);
        $cities = City::pluck('name', 'id');
        return view('frontend.cars.hourly', compact('cars', 'cities'));
    }

    public function carsGridMultiDay()
    {
        $cars = Car::with('vehicleCategory')->where('is_active', true)->where('category', 'multidaytrip')->paginate(12);
        $cities = City::pluck('name', 'id');
        return view('frontend.cars.multiday', compact('cars', 'cities'));
    }

    public function carDetail($id)
    {
        return view('frontend.cars.detail', compact('id'));
    }

    // Booking Related Pages
    public function bookingDetail($id)
    {
        return view('frontend.booking.detail', compact('id'));
    }

    public function passengerDetails()
    {
        return view('frontend.booking.passenger-details');
    }

    public function checkout()
    {
        return view('frontend.booking.checkout');
    }

    public function cart()
    {
        return view('frontend.booking.cart');
    }
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);
        
        $user->update($validated);
        
        return redirect()->route('account')
            ->with('success', 'Profile updated successfully!');
    }
    // Blog Pages
    public function blog()
    {
        return view('frontend.blog.index');
    }

    public function blogDetail($slug)
    {
        return view('frontend.blog.detail', compact('slug'));
    }

    // Static Pages
    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact');
    }

    public function offer()
    {
        return view('frontend.pages.offer');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function termsConditions()
    {
        return view('frontend.pages.terms_conditions');
    }

    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function conditions()
    {
        return view('frontend.pages.conditions');
    }

    // User Account Pages
   public function myAccount()
    {
        $user = auth()->user();
        return view('frontend.pages.my_account', compact('user'));
    }
    public function myBookings()
    {
        return view('frontend.account.bookings');
    }
    public function updatePassword(Request $request)
    {
        try {
            $validated = $request->validate([
                'current_password' => ['required', 'current_password'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ], [
                'current_password.current_password' => 'The current password is incorrect.',
                'password.confirmed' => 'The new password confirmation does not match.',
            ]);

            $request->user()->update([
                'password' => bcrypt($validated['password']),
            ]);

            return back()->with('password_success', 'Password updated successfully!');
            
        } catch (\Exception $e) {
            \Log::error('Password update error: ' . $e->getMessage());
            return back()->withErrors(['error' => $e->getMessage().'']);
        }
    }
    public function profile()
    {
        return view('frontend.account.profile');
    }

    // Multi-day Trip
    public function multiDayTripDetail($id)
    {
        return view('frontend.trips.multiday-detail', compact('id'));
    }
}
