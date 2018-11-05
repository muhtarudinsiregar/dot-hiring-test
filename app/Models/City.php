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

    public function scopeGetData($query)
    {
        $params = request('city_id');

        $query->when($params, function ($q) use ($params) {
            return $q->where('id', $params);
        });

        return $query->get();
    }
}
