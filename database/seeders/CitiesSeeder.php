<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Москва',
            'Санкт-Петербург',
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
