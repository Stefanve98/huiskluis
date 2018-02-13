<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     * @var string
     */
    protected $table = 'db_house_addresses';

    /**
     * @var array
     */
    protected $fillable = [
        'country',
        'zip_code',
        'city',
        'street',
        'number',
        'Additional',
    ];
}