<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CheckCarImages extends Command
{
    protected $signature = 'cars:check-images';
    protected $description = 'Check car images and their paths';

    public function handle()
    {
        $cars = Car::all();
        
        $this->info("Total cars: " . $cars->count());
        $this->newLine();
        
        foreach ($cars as $car) {
            $this->line("ID: {$car->id} - {$car->make} {$car->model}");
            $this->line("Image path in DB: " . ($car->image ?? 'NULL'));
            
            if ($car->image) {
                // Check if file exists in storage
                $exists = Storage::disk('public')->exists($car->image);
                $this->line("File exists: " . ($exists ? 'YES' : 'NO'));
                
                if ($exists) {
                    $this->line("Full URL: " . asset('storage/' . $car->image));
                }
            }
            
            $this->newLine();
        }
        
        return 0;
    }
}
