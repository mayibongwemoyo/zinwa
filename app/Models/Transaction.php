<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_id',
        'meter_id',
        'transaction_id',
        'amount_due',
        'amount_previous',
        'amount_paid',
        'status',
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }
}
