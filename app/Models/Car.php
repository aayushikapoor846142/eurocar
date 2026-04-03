<?php
// app/Models/Car.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'make',
        'model',
        'year',
        'price',
        'discount',
        'seats',
        'luggage',
        'driver_language',
        'category',
        'vehicle_category_id',
        'image',
        'is_featured',
        'is_active'
    ];

    const CATEGORY_TRANSFER = 'transfer';
    const CATEGORY_DAYTRIP = 'daytrip';
    const CATEGORY_MULTIDAYTRIP = 'multidaytrip';
    const CATEGORY_HOURLY = 'hourly';

    public static function getCategories()
    {
        return [
            self::CATEGORY_TRANSFER => 'Transfer',
            self::CATEGORY_DAYTRIP => 'Day Trip',
            self::CATEGORY_MULTIDAYTRIP => 'Multiday Trip',
            self::CATEGORY_HOURLY => 'Hourly Rental',
        ];
    }

    protected $appends = ['final_price'];

    public function vehicleCategory()
    {
        return $this->belongsTo(VehicleCategory::class);
    }

    public function getFinalPriceAttribute()
    {
        return $this->price - $this->discount;
    }
}