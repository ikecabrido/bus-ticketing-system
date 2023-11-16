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
        // $destination = destination();
        return [
            'id' => $this->id,
            'destination_to' => $this->destination_to,
            'destination_from' => $this->destination_from,
            // 'destination_to_id' =>$this->destination_to_id,
            // 'destination_from_id' =>$this->destination_from_id,
            // 'destination_to_id' =>$destination->destination_to_id,
            // 'destination_from_id' =>$destination->destination_from_id,
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
