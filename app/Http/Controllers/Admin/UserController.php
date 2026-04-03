<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }
    // In app/Http/Controllers/Admin/UserController.php
    public function store(Request $request)
    {
      $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => 'nullable|string|max:20',
        'password' => 'required|string|min:8|confirmed',
        'is_admin' => 'boolean',
    ]);

    // In store method create array
    $user = User::create([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'] ?? null,
        'email' => $validated['email'],
        'phone' => $validated['phone'] ?? null,
        'password' => Hash::make($validated['password']),
        'is_admin' => $validated['is_admin'] ?? false,
        'is_active' => true,
    ]);


        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

   // In app/Http/Controllers/Admin/UserController.php
public function update(Request $request, User $user)
{
   // In update method validation
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'phone' => 'nullable|string|max:20',
        'password' => 'nullable|string|min:8|confirmed',
        'is_admin' => 'boolean',
        'is_active' => 'boolean',
    ]);

    // In update method update array
    $user->update([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'] ?? null,
        'email' => $validated['email'],
        'phone' => $validated['phone'] ?? null,
        'is_admin' => $validated['is_admin'] ?? false,
        'is_active' => $validated['is_active'] ?? true,
    ]);

    // Update password if provided
    if (!empty($validated['password'])) {
        $user->update([
            'password' => Hash::make($validated['password']),
        ]);
    }

    return redirect()->route('admin.users.index')
        ->with('success', 'User updated successfully');
}

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
            ->with('success', 'User deleted successfully');
    }
}