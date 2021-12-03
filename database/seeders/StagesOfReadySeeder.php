<?php

namespace Database\Seeders;

use App\Models\StageOfReady;
use Illuminate\Database\Seeder;

class StagesOfReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stagesOfReady = [
            [
                'name' => 'Идея',
            ],
            [
                'name' => 'Прототип',
            ],
            [
                'name' => 'Продукт',
            ],
        ];

        foreach ($stagesOfReady as $stageOfReady) {
            StageOfReady::create($stageOfReady);
        }
    }
}
