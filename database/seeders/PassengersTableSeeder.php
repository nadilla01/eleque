<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Passenger;

class PassengersTableSeeder extends Seeder
{
    public function run()
    {
        Passenger::create([
            'flight_id' => 'FL456',
            'name' => 'John Doe',
        ]);

        Passenger::create([
            'flight_id' => 'FL256',
            'name' => 'Jane Smith',
        ]);
        Passenger::create([
            'flight_id' => 'GR123',
            'name' => 'MAS PUR',
        ]);
        Passenger::create([
            'flight_id' => 'SQ456',
            'name' => 'Mbapuk',
        ]);
    }
}
