<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Transformers\ProvinceTransformer;
use App\Models\City;

class RajaongkirSearch extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }
    public function province(Request $request)
    {
        $provinces = Province::getData();
        return $this->response->array($provinces);
    }

    public function city()
    {
        $cities = City::getData();
        return $this->response->array($cities);
    }
}
