<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        return TransactionResource::collection(Transaction::all());
    }


    public function store(Request $request)
    {
        $fields = $request->valildate([
            'reservation_id' => 'numeric'
        ]);

        $reservation = Reservation::find($fields['reservation_id']);

        $transaction = Transaction::create([
            'reservation_id' => $reservation,
            'ticket_number' => fake()->unique()->numberBetween(1000, 9999),
            'transaction_date' => now()
        ]);

        // $reservation = Reservation::find($id);
        // $transaction = Transaction::create([
        //     'reservation_id' =>$reservation,
        //     'ticket_number' => fake()->unique()->numberBetween(1000, 9999),
        //     'transaction_date' => now()
        // ]);


        if ($transaction) {
            return response([
                'message' => 'Transaction successful!'
            ], 201);
        } else {
           return response([
            'message' => 'Transaction failed!'
           ], 500);
        }
        
    }

    public function show(string $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response([
                'message' => 'Transaction does not exist'
            ], 400);
        };

        return response([
            'transaction' => $transaction
        ], 200);
    }
}
