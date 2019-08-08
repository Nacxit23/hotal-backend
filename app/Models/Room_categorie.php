<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room_categorie extends Model
{
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
