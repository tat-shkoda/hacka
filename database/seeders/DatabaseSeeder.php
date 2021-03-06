<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoryAndSubCategorySeeder::class);
        $this->call(StagesOfReadySeeder::class);
        $this->call(ProjectStatusesAndCriterialsSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(ProjectsSeeder::class);
    }
}
