<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit_card extends Model
{
    protected $fillable = [
        'title_name',
        'expiration_date',
        'creditCards_number',
        'segurity_number',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
