<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_id',
        'meter_number',
        'previous_reading',
        'current_reading',
        'consumption',
        'coordinates',
        'status',
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }
}
