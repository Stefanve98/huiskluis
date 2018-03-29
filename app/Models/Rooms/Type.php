<?php

namespace App\Models\Rooms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * @return HasMany
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Rooms::class, 'type_id', 'id');
    }
}