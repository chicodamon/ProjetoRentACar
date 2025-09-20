<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $fillable = [
        'Brand',
        'Model',
        'Color',
        'LicensePlate',
        'Year',
        'Price_per_Day',
        'FuelType',
        'Transmission',
        'Mileage',
        'Status', // 'available', 'sold', 'reserved'
    ];
}
