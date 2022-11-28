<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'stand_owner',
        'stand_number',
        'parcel_type',
    ];

    public function meter()
    {
        return $this->hasOne(Meter::class);
    }
}
