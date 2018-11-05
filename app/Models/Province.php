<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name', 'id'];

    public function scopeGetData($query)
    {
        $param = request('province_id');
        $query->when($param, function ($q) use ($param) {
            return $q->where('id', $param);
        });

        return $query->get();
    }
}
