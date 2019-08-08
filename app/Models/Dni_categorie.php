<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dni_categorie extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nameDni',
        'dataDni',
        'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
