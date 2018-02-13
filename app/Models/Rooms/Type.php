<?php

namespace App\Models\Rooms;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    /**
     * @var string
     */
    protected $table = 'db_room_types';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}