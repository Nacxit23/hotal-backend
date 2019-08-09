<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * @package App\Models
 */
class Reservation extends Model
{
    /**
     * @var string
     */
    protected $table = 'reservations';

    /**
     * @var array
     */
    protected $fillable = [
        'check_in',
        'check_out',
        'reservation_date',
        'status',
        'id_users',
        'id_rooms',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkDetails()
    {
        return $this->hasMany(CheckDetail::class);
    }
}
