<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'reservation' => [
                'id' => $this->reservation->id,
                'reservation_date' => $this->reservation->reservation_date,
                'bus_id' => $this->reservation->bus_id
            ],
            'ticket_number' =>$this->ticket_number,
            'transaction_date' => $this->transaction_date
        ];
    }
}
