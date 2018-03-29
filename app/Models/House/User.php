<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * @var string
     */
    protected $table = 'db_house_users';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'house_owner_type_id',
        'house_id',
    ];
}