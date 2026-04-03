<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class VehicleCategoryController extends Controller
{
    public function index()
    {
        $categories = VehicleCategory::orderBy('sort_order')->paginate(15);
        return view('admin.vehicle-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.vehicle-categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'vehicle_example' => 'nullable|string|max:255',
            'max_passengers' => 'required|integer|min:1',
            'max_big_bags' => 'required|integer|min:0',
            'max_small_bags' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        VehicleCategory::create($validated);

        return redirect()->route('admin.vehicle-categories.index')
            ->with('success', 'Vehicle category created successfully.');
    }

    public function edit(VehicleCategory $vehicleCategory)
    {
        return view('admin.vehicle-categories.edit', compact('vehicleCategory'));
    }

    public function update(Request $request, VehicleCategory $vehicleCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'vehicle_example' => 'nullable|string|max:255',
            'max_passengers' => 'required|integer|min:1',
            'max_big_bags' => 'required|integer|min:0',
            'max_small_bags' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $vehicleCategory->update($validated);

        return redirect()->route('admin.vehicle-categories.index')
            ->with('success', 'Vehicle category updated successfully.');
    }

    public function destroy(VehicleCategory $vehicleCategory)
    {
        $vehicleCategory->delete();

        return redirect()->route('admin.vehicle-categories.index')
            ->with('success', 'Vehicle category deleted successfully.');
    }
}
