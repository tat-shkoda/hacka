<?php

namespace Database\Seeders;

use App\Models\Criterial;
use App\Models\ProjectStatus;
use Illuminate\Database\Seeder;

class ProjectStatusesAndCriterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectStatuses = [
            [
                'name' => 'Заявка подана',
                'description' => 'Заявка подана',
                'search_key' => 'Заявка подана',
            ],
            [
                'name' => 'Скрининг',
                'description' => 'Скрининг',
                'search_key' => 'Скрининг',
                'criterials' => [
                    'Наличие MVP или готового продукта',
                    'Наличие команды, которая умеет создавать технологии',
                    'Соответствие продукта заявленным сферам деятельности',
                ],
            ],
            [
                'name' => 'Скоринг',
                'description' => 'Скоринг',
                'search_key' => 'Скоринг',
                'criterials' => [
                    'Проблема',
                    'Решение',
                    'Интеллектуальная собственность',
                    'Опыт внедрения',
                    'Запрос на внедрение от организаций транспортного комплекса Москвы',
                    'Мсштабирование',
                ],
            ],
            [
                'name' => 'Экспертный совет',
                'description' => 'Экспертный совет',
                'search_key' => 'Экспертный совет',
            ],
            [
                'name' => 'Акселерационная программа',
                'description' => 'Акселерационная программа',
                'search_key' => 'Акселерационная программа',
            ],
            [
                'name' => 'Программа пилотирования',
                'description' => 'Программа пилотирования',
                'search_key' => 'Программа пилотирования',
            ],
            [
                'name' => 'Инвестирование',
                'description' => 'Инвестирование',
                'search_key' => 'Инвестирование',
            ],
            [
                'name' => 'Заявка отклонена',
                'description' => 'Заявка отклонена',
                'search_key' => 'Заявка отклонена',
            ],
        ];

        foreach ($projectStatuses as $projectStatus) {
            $createdProjectStatuses = ProjectStatus::firstOrCreate(['name' => $projectStatus['name']]);

            if (isset($projectStatus['criterials'])) {
                foreach ($projectStatus['criterials'] as $criterial) {
                    Criterial::firstOrCreate([
                        'text' => $criterial,
                        'project_status_id' => $createdProjectStatuses->id
                    ]);
                }
            }
        }
    }
}
