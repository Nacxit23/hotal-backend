<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credit_card
 * @package App\Models
 */
class CreditCard extends Model
{
    /**
     * @var string
     */
    protected $table = 'creditCards';

    /**
     * @var array
     */
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
