<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('vehicleCategory')->latest()->paginate(10);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $vehicleCategories = VehicleCategory::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.cars.create', compact('vehicleCategories'));
    }

    public function edit(Car $car)
    {
        $vehicleCategories = VehicleCategory::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.cars.edit', compact('car', 'vehicleCategories'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'make' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'driver_language' => 'required|string|max:100',
            'category' => 'required|in:transfer,daytrip,multidaytrip,hourly',
            'vehicle_category_id' => 'nullable|exists:vehicle_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        // Set default values for seats and luggage (kept in DB for backward compatibility)
        $data['seats'] = 4;
        $data['luggage'] = 2;
        if ($request->hasFile('image')) {
        
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
        
            $destinationPath = public_path('uploads/cars');
        
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
        
            $file->move($destinationPath, $filename);
        
            $data['image'] = 'uploads/cars/' . $filename;
        }
        Car::create($data);

        return redirect()->route('admin.cars.index')
            ->with('success', 'Car created successfully.');
    }
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'driver_language' => 'required|string|max:255',
            'category' => 'required|in:transfer,daytrip,multidaytrip,hourly',
            'vehicle_category_id' => 'nullable|exists:vehicle_categories,id',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Set default values for seats and luggage (kept in DB for backward compatibility)
        $validated['seats'] = 4;
        $validated['luggage'] = 2;

if ($request->hasFile('image')) {

    // Delete old image if exists
    if (!empty($car->image)) {
        $oldPath = public_path($car->image);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }

    // Upload new image
    $file = $request->file('image');
    $filename = time() . '_' . $file->getClientOriginalName();

    $destinationPath = public_path('uploads/cars');

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file->move($destinationPath, $filename);

    // Save path in DB
    $validated['image'] = 'uploads/cars/' . $filename;
}
        $car->update($validated);

        return redirect()->route('admin.cars.index')
                        ->with('success', 'Car updated successfully');
    }

    public function destroy(Car $car)
    {
        // Delete image if exists
        if ($car->image) {
            Storage::delete('public/' . $car->image);
        }
        
        $car->delete();
        
        return redirect()->route('admin.cars.index')
                        ->with('success', 'Car deleted successfully');
    }
}