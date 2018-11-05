<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RajaOngkir;
use App\Models\Province;
use App\Models\City;

class RajaongkirCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rajaongkir:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from rajaongkir to db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $provinces = RajaOngkir::getProvinces();
        $this->storeProvinces($provinces);

        $this->storeCities($provinces);
    }

    private function storeProvinces($provinces)
    {
        foreach ($provinces as $key => $province) {
            Province::create(
                ['name' => $province->name, 'id' => $key]
            );

            $this->storeCities($province, $key);
        }
        return true;
    }

    public function storeCities($province, $provinceId)
    {
        $cities = $province->getCities();

        foreach ($cities as $key => $city) {
            // dd($city);
            City::create(
                [
                    'id' => $key,
                    'province_id' => $provinceId,
                    'province' => $province->name,
                    'type' => $city->type,
                    'city_name' => $city->name,
                    'postal_code' => $city->postalCode
                ]
            );
        }
    }
}
