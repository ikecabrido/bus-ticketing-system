<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
use App\Models\Reservation;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_number',
        'bus_type',
        'price',
        'destinationFrom',
        'destinationTo',
        'departure_time',
        'departure_date'
    ];

    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }
}
