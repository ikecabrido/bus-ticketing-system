<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'ticket_number',
        'transaction_date',
        
    ];
    

    public function reservation():BelongsTo {
        return $this->BelongsTo(Reservation::class)->orderBy('created_at', 'desc');
    }
}
