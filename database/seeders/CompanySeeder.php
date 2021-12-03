<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            'Московский метрополитен',
            'Мосгорстранс',
            'ЦОДД',
            'Организатор перевозок',
            'АМПП',
        ];

        $cities = City::all()->toArray();

        foreach ($companies as $company) {
            if (Company::where('name', '=', $company)->first())
                continue;

            Company::create([
                'name' => $company,
                'description' => $company,
                'comment' => $company,
                'city_id' => $cities[array_rand($cities)]['id'],
            ]);
        }
    }
}
