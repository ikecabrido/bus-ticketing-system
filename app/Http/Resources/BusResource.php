<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $destinationTo = Destination::find('id')
        return [
            'id' => $this->id,
            'destination_to' => [
                // 'id' => $this->destination_to_id->id,
                'place' => $this->destination_to_id->place
            ],
            'destination_from' => [
                // 'id' => $this->destination_from_id->id,
                'place' => $this->destination_from_id->place
            ],
            // 'destination_to_id' =>$this->destination_to_id,
            // 'destination_from_id' =>$this->destination_from_id,
            // 'destination' => [
            //     'id' => $this->destination->id,
            //     'place' => $this->destination->place
            // ],
            'bus_number' => $this->bus_number,
            'bus_type' => $this->bus_type,
            'departure_time' => $this->departure_time,
            'departure_date' => $this->departure_date,
            'price' => $this->price
        ];
    }
}
