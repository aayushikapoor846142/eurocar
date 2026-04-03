<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Check if admin user already exists
        $adminExists = User::where('email', 'admin@admin.com')->exists();
        
        if (!$adminExists) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'is_admin' => 1,
                'is_active' => 1,
            ]);
            
            echo "Admin user created successfully!\n";
            echo "Email: admin@admin.com\n";
            echo "Password: admin123\n";
        } else {
            echo "Admin user already exists.\n";
        }
    }
}
