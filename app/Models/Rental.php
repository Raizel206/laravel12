<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    /** @use HasFactory<\Database\Factories\RentalFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'bike_id', 
        'start_station_id', 
        'end_station_id', 
        'star_time', 
        'end_time', 
        'total_price', 
        'status'
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function startStation()
    {
        return $this->belongsTo(Station::class,'start_station_id');
    }

    public function endStation()
    {
        return $this->belongsTo(Station::class,'end_station_id');
    }
}