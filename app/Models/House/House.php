<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class House extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'db_house';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address_id',
    ];

    /**
     * @return HasOne
     */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
}