<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\City;

class CarsController extends Controller
{
   // app/Http/Controllers/Frontend/CarsController.php

    public function index(Request $request)
    {
        $query = Car::where('is_active', true)->with('vehicleCategory');
        $cities = City::latest()->get();

        // Filter by category if specified
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        $cars = $query->latest()->paginate(12);

        $categories = Car::getCategories();
        $cities = \App\Models\City::pluck('name', 'id');

        return view('frontend.cars.index', compact('cars','cities','categories', 'cities'));
    }

    public function search(Request $request)
    {
        $query = Car::query()->where('is_active', true)->with('vehicleCategory');
 
        // Filter by category/type
        $type = $request->input('type', 'transfer');
        $query->where('category', $type);
        
        // Filter by passengers using vehicle category
        // $totalPassengers = (int)$request->input('adults', 0) + (int)$request->input('children', 0);
        // //dd($totalPassengers);
        // if ($totalPassengers > 0) {
        //     // Filter by vehicle category max_passengers (>= requested passengers)
        //     $query->whereHas('vehicleCategory', function($q) use ($totalPassengers) {
        //         $q->where('max_passengers', '>=', $totalPassengers);
        //     });
        // }

       // Filter by vehicle category if specified
        if ($request->filled('vehicle_category_id')) {
            $query->where('vehicle_category_id', $request->input('vehicle_category_id'));
        }

        // Hourly rental specific filters
        if ($type === 'hourly') {
            // Filter by city if specified
            if ($request->filled('city')) {
                // You can add city relationship to cars table if needed
                // For now, we'll just pass it to the view
            }
            
            // Store hours for display/calculation
            if ($request->filled('hours')) {
                $hours = (int)$request->input('hours');
                // You can use this for price calculation if needed
            }
        }

        // Day trip specific filters
        if ($type === 'daytrip') {
            if ($request->filled('destination')) {
                // Store destination for display
            }
        }

        // Multiday trip specific filters
        if ($type === 'multidaytrip') {
            if ($request->filled('country')) {
                // Store country for display
            }
            if ($request->filled('days')) {
                // Store days for price calculation
            }
        }

        // Transfer specific filters
        if ($type === 'transfer') {
            if ($request->filled('pickup_location') || $request->filled('dropoff_location')) {
                // Store locations for display
            }
        }

        // Sort by best value (lowest final price first)
        $query->orderByRaw('(price - discount) ASC');
//        dd($query);
        $cars = $query->paginate(12)->appends($request->all());
        //dd($cars);
        $categories = Car::getCategories();
        $cities = City::pluck('name', 'id');

        return view('frontend.cars.index', compact('cars', 'cities', 'categories'))
            ->with('searchParams', $request->all());
    }

public function show($id)
{
    $car = Car::with('vehicleCategory')->findOrFail($id);

    // Get related cars (same category)
    $relatedCars = Car::where('id', '!=', $car->id)
        ->take(3)
        ->get();

    return view('frontend.cars.detail', compact('car', 'relatedCars'));
}
}