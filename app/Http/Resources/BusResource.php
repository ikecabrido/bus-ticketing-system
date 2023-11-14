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
        return [
            'id' => $this->id,
            'bus_number' => $this->bus_number,
            'bus_type' => $this->bus_type,
            'destinationFrom' => $this->destinationFrom,
            'destinationTo' => $this->destinationTo,
            'departure_time' => $this->departure_time,
            'departure_date' => $this->departure_date,
            'price' => $this->price
        ];
    }
}
