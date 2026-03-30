<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    /** @use HasFactory<\Database\Factories\BikeFactory> */
    use HasFactory;

    protected $fillable = ['code', 'name', 'color', 'status', 'price_per_minute', 'station_id'];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}