<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Reservation;
use App\Models\Destination;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination_to_id',
        'destination_from_id',
        'bus_number',
        'bus_type',
        'price',
        'departure_time',
        'departure_date'
    ];

    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }

    public function destination():BelongsTo {
        return $this->belongsTo(Destination::class);
    }
}
