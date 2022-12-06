<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'parcel_id',
        'previous_reading',
        'current_reading',
        'consumption',
        'status',
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }
}
