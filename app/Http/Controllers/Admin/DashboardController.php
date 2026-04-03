<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Apply the 'auth' middleware to all methods in this controller
        $this->middleware('auth');
        
        // Apply the 'admin' middleware to all methods in this controller
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
