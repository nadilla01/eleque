<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'my_flights';
    protected $primaryKey = 'flight_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['flight_id', 'airline'];
    //Addattributesyouwanttobe//mass-assignable

    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'flight_id');
    }
}
