<?php

namespace App\Models\House;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'additional',
    ];

    /**
     * @return BelongsTo
     */
    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class, 'id', 'address_id');
    }

    /**
     * @param $value
     */
    public function setZipCodeAttribute($value)
    {
        $this->attributes['zip_code'] = strtoupper($value);
    }

    /**
     * @param $value
     */
    public function setAdditionalAttribute($value)
    {
        $this->attributes['additional'] = strtoupper($value);
    }

    /**
     * @param $value
     */
    public function setStreetAttribute($value)
    {
        $this->attributes['street'] = strtolower($value);
    }
}