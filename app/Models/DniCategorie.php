<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dni_categorie
 * @package App\Models
 */
class DniCategorie extends Model
{

    /**
     * @var string
     */
    protected $table = 'dniCategories';
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
