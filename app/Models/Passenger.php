<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = ['flight_id', 'name']; // Kolom yang bisa diisi secara massal

    /**
     * Relasi: Setiap Passenger milik satu Flight.
     */
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id'); // Relasi ke model Flight
    }
}