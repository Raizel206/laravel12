<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    /** @use HasFactory<\Database\Factories\StationFactory> */
    use HasFactory;

    protected $fillable = ['name', 'ward_id', 'address', 'status', 'total_bikes', 'image'];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function bikes()
    {
        return $this->hasMany(Bike::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}