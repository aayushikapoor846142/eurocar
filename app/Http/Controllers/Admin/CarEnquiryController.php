<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarEnquiry;
use Illuminate\Http\Request;

class CarEnquiryController extends Controller
{
    public function index()
    {
        $enquiries = CarEnquiry::with('car')->latest()->paginate(20);
        return view('admin.car-enquiries.index', compact('enquiries'));
    }

    public function show(CarEnquiry $carEnquiry)
    {
        $carEnquiry->load('car');
        return view('admin.car-enquiries.show', compact('carEnquiry'));
    }

    public function updateStatus(Request $request, CarEnquiry $carEnquiry)
    {
        $request->validate([
            'status' => 'required|in:pending,contacted,converted,cancelled'
        ]);

        $carEnquiry->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function destroy(CarEnquiry $carEnquiry)
    {
        $carEnquiry->delete();
        return redirect()->route('admin.car-enquiries.index')
            ->with('success', 'Enquiry deleted successfully');
    }
}
