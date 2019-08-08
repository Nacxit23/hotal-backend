<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check_detail extends Model
{
    protected $fillable = [
        'id_reservations',
        'total',
        'tax',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
