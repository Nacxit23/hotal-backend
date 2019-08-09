<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room_categorie
 * @package App\Models
 */
class RoomCategorie extends Model
{
    /**
     * @var string
     */
    protected $table = 'roomCategories';

    /**
     * @var array
     */
    protected $fillable = [
        'nameCategories',
        'descripcion',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
