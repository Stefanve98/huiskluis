<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;

class Invites extends Model
{

    /**
     * @var string
     */
    protected $table = 'db_house_invites';

    /**
     * @var array
     */
    protected $fillable = [
        'house_id',
        'user_id',
        'invited_by_id',
        'email',
    ];
}