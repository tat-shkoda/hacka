<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Project;
use App\Models\ProjectStatus;
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
        $companies = Company::all()->toArray();
        $statuses = ProjectStatus::all()->toArray();

        $items = [
            [
                'name' => 'Тестовый проект 1',
                'stages_of_ready_id' => $stages[array_rand($stages)]['id'],
                'category_id' => $catId = $categories[array_rand($categories)]['id'],
                'subcategory_id' => $this->getRandomSubCategory($catId),
                'short_description' => 'Короткое описание',
                'benefit' => 'benefit',
                'company_id' => $companies[array_rand($companies)]['id'],
                'status_id' => $statuses[array_rand($statuses)]['id'],
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
                'logo' => 'https://slovnet.ru/wp-content/uploads/2019/10/15-52.jpg',
                'images' => json_encode([
                    'https://image.krasview.ru/video/d5270401c566718/__5.jpg',
                    'https://slovnet.ru/wp-content/uploads/2019/10/15-52.jpg',
                    'https://heaclub.ru/tim/0c2febb70110f54660c3fa64ce24a5e4/kak-uznat-dlinu-udava.jpg',
                ]),
            ],
            [
                'name' => 'Тестовый проект 2',
                'stages_of_ready_id' => $stages[array_rand($stages)]['id'],
                'category_id' => $catId = $categories[array_rand($categories)]['id'],
                'subcategory_id' => $this->getRandomSubCategory($catId),
                'short_description' => 'Короткое описание второго проекта',
                'benefit' => 'benefit',
                'company_id' => $companies[array_rand($companies)]['id'],
                'status_id' => $statuses[array_rand($statuses)]['id'],
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
                'logo' => 'https://slovnet.ru/wp-content/uploads/2019/10/15-52.jpg',
                'images' => json_encode([
                    'https://image.krasview.ru/video/d5270401c566718/__5.jpg',
                    'https://slovnet.ru/wp-content/uploads/2019/10/15-52.jpg',
                    'https://heaclub.ru/tim/0c2febb70110f54660c3fa64ce24a5e4/kak-uznat-dlinu-udava.jpg',
                ]),
            ],
        ];

        foreach ($items as $item) {
            if ($project = Project::where(['name' => $item['name']])->first())
                continue;

            Project::firstOrCreate($item);
        }
    }

    function getRandomSubCategory($categoryId)
    {
        $subcategories = SubCategory::where('category_id', $categoryId)->get()->toArray();

        return $subcategories[array_rand($subcategories)]['id'];
    }
}
