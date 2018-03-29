<?php

namespace App\Models\Rooms;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    /**
     * @var string
     */
    protected $table = 'db_house_rooms';

    /**
     * @var array
     */
    protected $fillable = [
        'type_id',
        'user_id',
        'house_id',
        'surface',
        'cubic_meters',
    ];
}