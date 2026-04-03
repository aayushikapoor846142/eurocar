<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::latest()->paginate(10);
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:countries',
            'code' => 'required|string|max:3|unique:countries',
            'phone_code' => 'required|string|max:10',
            'is_active' => 'boolean',
        ]);

        Country::create($validated);

        return redirect()->route('admin.countries.index')
            ->with('success', 'Country created successfully');
    }

    public function edit(Country $country)
    {
        return view('admin.countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $country->id,
            'code' => 'required|string|max:3|unique:countries,code,' . $country->id,
            'phone_code' => 'required|string|max:10',
            'is_active' => 'boolean',
        ]);

        $country->update($validated);

        return redirect()->route('admin.countries.index')
            ->with('success', 'Country updated successfully');
    }

    public function destroy(Country $country)
    {
        if ($country->cities()->exists()) {
            return redirect()->route('admin.countries.index')
                ->with('error', 'Cannot delete country with associated cities');
        }

        $country->delete();
        return redirect()->route('admin.countries.index')
            ->with('success', 'Country deleted successfully');
    }
}