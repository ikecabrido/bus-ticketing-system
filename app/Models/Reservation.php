<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Bus;
use App\Models\Reservation;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'reservation_date',  
        'quantity'  
    ];

    public function bus():BelongsTo {
        return $this->belongsTo(Bus::class);
    }


    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }
}
