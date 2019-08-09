<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * @package App\Models
 */
class Room extends Model
{
    /**
     * @var string
     */
    protected $table = 'rooms';
    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'location',
        'nightPrice',
        'status',
        'id_roomCategories',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomCategorie()
    {
        return $this->belongsTo(RoomCategorie::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
