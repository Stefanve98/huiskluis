<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class House extends Model
{

    use SoftDeletes;

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