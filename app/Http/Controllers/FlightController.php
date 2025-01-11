<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::with('passengers')->get();
        return view('flights.index', ['flights' => $flights]);
    }
}
