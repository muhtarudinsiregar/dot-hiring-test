<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id',
        'province_id',
        'province',
        'type',
        'city_name',
        'postal_code'
    ];
}
