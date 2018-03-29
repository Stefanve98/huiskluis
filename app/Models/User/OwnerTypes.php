<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class OwnerTypes extends Model
{

    /**
     * owner
     */
    const owner = 1;

    /**
     * @var string
     */
    protected $table = 'db_house_owner_types';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];

}