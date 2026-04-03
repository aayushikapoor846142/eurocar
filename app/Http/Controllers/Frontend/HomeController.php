<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get cars by category
        $transferCars = Car::where('is_active', true)
            ->where('category', 'transfer')
            ->take(6)
            ->get();
            
        $daytripCars = Car::where('is_active', true)
            ->where('category', 'daytrip')
            ->take(6)
            ->get();
            
        $multidaytripCars = Car::where('is_active', true)
            ->where('category', 'multidaytrip')
            ->take(6)
            ->get();
            
        $hourlyCars = Car::where('is_active', true)
            ->where('category', 'hourly')
            ->take(6)
            ->get();
        
        $categories = Car::getCategories();
        $cities = \App\Models\City::pluck('name', 'id');
        $vehicleCategories = \App\Models\VehicleCategory::where('is_active', true)->orderBy('sort_order')->get();
        
        return view('frontend.index', compact(
            'transferCars',
            'daytripCars', 
            'multidaytripCars',
            'hourlyCars',
            'categories',
            'cities',
            'vehicleCategories'
        ));
    }
}
