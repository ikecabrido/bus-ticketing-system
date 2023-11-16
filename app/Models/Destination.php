<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Bus;

class Destination extends Model
{
    use HasFactory;
    protected $fillables =[
        'place'
    ];

    public function bus(): BelongsTo {
        return $this->belongsTo(Bus::class);
    }
}
