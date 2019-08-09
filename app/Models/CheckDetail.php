<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Check_detail
 * @package App\Models
 */
class CheckDetail extends Model
{
    /**
     * @var string
     */
    protected $table = 'checkDetails';

    /**
     * @var array
     */
    protected $fillable = [
        'id_reservations',
        'total',
        'tax',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
