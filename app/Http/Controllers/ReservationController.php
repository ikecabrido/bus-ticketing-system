<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'bus_id' => 'numeric',
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'quantity' => 'required'
        ]);

        
        $bus = Bus::find($fields['bus_id']);


        $reservation = Reservation::create([
            'bus_id' => $bus->id,
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'reservation_date' => now(),
            'mobile_number' => $fields['mobile_number'],
            'quantity' => $fields['quantity']
        ]);

        if ($reservation) {
            return response([
                'message' => 'Successfully made a reservation!'
            ], 201);
        }else {
            return response([
                'message' => 'Unsuccessful reservation!'
            ], 500);
        }
    }

    
}
