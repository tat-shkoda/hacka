<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\StageOfReady;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all()->toArray();
        $stages = StageOfReady::all()->toArray();

        $items = [
            [
                'name' => 'Тестовый проект 1',
                'stages_of_ready_id' => $stages[array_rand($stages)]['id'],
                'category_id' => $catId = $categories[array_rand($categories)]['id'],
                'subcategory_id' => $this->getRandomSubCategory($catId),
                'short_description' => 'Короткое описание',
                'benefit' => 'benefit',
                'company_id' => 'company_id',
                'certification_type' => 'да, требуется сертификация и у нас она есть',
                'firstname' => 'Василий',
                'lastname' => 'Иваной',
                'surname' => 'Васильевич',
                'phone_number' => '89999990099',
                'email' => 'example@exaple.com',
                'telegram_id' => '',
                'other_data' => 'other_data',
                'email_company' => 'email_company@example.com',
                'company_name' => 'company_name',
                'inn' => '433 333 333 444',
                'url' => 'http://example.com',
                'original_source' => 'Источник',
                'presentation_link' => 'Ссылка на презентацию',
            ],
            [
                'name' => 'Тестовый проект 2',
                'stages_of_ready_id' => $stages[array_rand($stages)]['id'],
                'category_id' => $catId = $categories[array_rand($categories)]['id'],
                'subcategory_id' => $this->getRandomSubCategory($catId),
                'short_description' => 'Короткое описание второго проекта',
                'benefit' => 'benefit',
                'company_id' => 'company_id',
                'certification_type' => 'да, требуется сертификация и у нас она есть',
                'firstname' => 'Дмитрий',
                'lastname' => 'Петров',
                'surname' => 'Евгеньевич',
                'phone_number' => '89999990077',
                'email' => 'example@exaple.com',
                'telegram_id' => '',
                'other_data' => 'other_data',
                'email_company' => 'email_company2@example.com',
                'company_name' => 'company_name 2',
                'inn' => '433 333 333 444',
                'url' => 'http://example.com',
                'original_source' => 'Источник',
                'presentation_link' => 'Ссылка на презентацию',
            ],
        ];

        foreach ($items as $item) {
            Project::create($item);
        }
    }

    function getRandomSubCategory($categoryId)
    {
        $subcategories = SubCategory::where('category_id', $categoryId)->get()->toArray();

        return $subcategories[array_rand($subcategories)]['id'];
    }
}
