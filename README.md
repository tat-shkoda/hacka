### Реализованная функциональность
- список, создание и редактирование проектов
- фильтрация проектов
- создание заявок
- список городов
- список статусов проектов
- этапы проектов
- список компаний
- список категорий и подкатегорий
- критерии оценки для статусов проектов


### Основной стек технологий:
- php
- laravel framework ^8.65
- nginx

#### Демо
Демо api доступно по адресу http://hacka.lucky-web.ru 


## Среда запуска
___
1. Развертывание сервиса производится на любом сервере
2. Требуются:
   - установленный nginx или apache
   - mysql 8
   - php 8+
   - composer https://getcomposer.org/doc/00-intro.md


## Установка
```
git clone git@github.com:tat-shkoda/hacka.git

composer install
php artisan migrate
php artisan db:seed
```


```
GET /api/projects

фильтры
{
  ids[]
  categories[]
  statuses[]
  stages[]
}

[
  {
    "id": 1,
    "name": "Тестовый проект 1",
    "stages_of_ready_id": 2,
    "category_id": 3,
    "subcategory_id": 17,
    "short_description": "Короткое описание",
    "benefit": "benefit",
    "company_id": 2,
    "status_id": 2,
    "certification_type": "да, требуется сертификация и у нас она есть",
    "firstname": "Василий",
    "lastname": "Иваной",
    "surname": "Васильевич",
    "phone_number": "89999990099",
    "email": "example@exaple.com",
    "telegram_id": "",
    "other_data": "other_data",
    "email_company": "email_company@example.com",
    "company_name": "company_name",
    "inn": "433 333 333 444",
    "url": "http:\/\/example.com",
    "original_source": "Источник",
    "presentation_link": "Ссылка на презентацию",
    "logo": "https:\/\/slovnet.ru\/wp-content\/uploads\/2019\/10\/15-52.jpg",
    "images": "[\"https:\/\/image.krasview.ru\/video\/d5270401c566718\/__5.jpg\", \"https:\/\/slovnet.ru\/wp-content\/uploads\/2019\/10\/15-52.jpg\", \"https:\/\/heaclub.ru\/tim\/0c2febb70110f54660c3fa64ce24a5e4\/kak-uznat-dlinu-udava.jpg\"]",
    "created_at": "2021-12-03T20:46:48.000000Z",
    "updated_at": "2021-12-03T20:46:48.000000Z",
    "category": {
      "id": 3,
      "name": "Цифровые технологии в транспорте"
    },
    "stage_of_ready": {
      "id": 2,
      "name": "Прототип"
    },
    "company": {
      "id": 2,
      "name": "Мосгорстранс",
      "description": "Мосгорстранс",
      "city_id": 2,
      "comment": "Мосгорстранс"
    },
    "status": {
      "id": 2,
      "name": "Заявка отклонена",
      "description": null,
      "search_key": null
    }
  }
]


GET /api/projects/1

{
  "id": 1,
  "name": "Тестовый проект 1",
  "stages_of_ready_id": 2,
  "category_id": 3,
  "subcategory_id": 17,
  "short_description": "Короткое описание",
  "benefit": "benefit",
  "company_id": 2,
  "status_id": 2,
  "certification_type": "да, требуется сертификация и у нас она есть",
  "firstname": "Василий",
  "lastname": "Иваной",
  "surname": "Васильевич",
  "phone_number": "89999990099",
  "email": "example@exaple.com",
  "telegram_id": "",
  "other_data": "other_data",
  "email_company": "email_company@example.com",
  "company_name": "company_name",
  "inn": "433 333 333 444",
  "url": "http:\/\/example.com",
  "original_source": "Источник",
  "presentation_link": "Ссылка на презентацию",
  "logo": "https:\/\/slovnet.ru\/wp-content\/uploads\/2019\/10\/15-52.jpg",
  "images": "[\"https:\/\/image.krasview.ru\/video\/d5270401c566718\/__5.jpg\", \"https:\/\/slovnet.ru\/wp-content\/uploads\/2019\/10\/15-52.jpg\", \"https:\/\/heaclub.ru\/tim\/0c2febb70110f54660c3fa64ce24a5e4\/kak-uznat-dlinu-udava.jpg\"]",
  "created_at": "2021-12-03T20:46:48.000000Z",
  "updated_at": "2021-12-03T20:46:48.000000Z",
  "category": {
    "id": 3,
    "name": "Цифровые технологии в транспорте"
  },
  "stage_of_ready": {
    "id": 2,
    "name": "Прототип"
  },
  "company": {
    "id": 2,
    "name": "Мосгорстранс",
    "description": "Мосгорстранс",
    "city_id": 2,
    "comment": "Мосгорстранс"
  },
  "status": {
    "id": 2,
    "name": "Заявка отклонена",
    "description": null,
    "search_key": null
  }
}

POST /api/projects
PUT /api/projects/1

request
{
  company_name            string
  company_name            string
  stages_of_ready_id      int
  subcategory_id          int
  subcategory_id          int
  short_description       string
  company_id              int
  status_id               int
  certification_type      enum
  firstname               string
  lastname                string
  surname                 string
  phone_number            int
  email                   string
  telegram_id             int
  other_data              string
  email_company           string
  company_name            string
  inn                     int
  url                     string
  original_source         string
  presentation_link       string
  logo                    string
  images                  json
}

response
{
  "id": 1,
  "name": "Новое имя проекта2",
  "stages_of_ready_id": 1,
  "category_id": 3,
  "subcategory_id": 17,
  "short_description": "Короткое описание",
  "benefit": "benefit",
  "company_id": "5",
  "certification_type": "да, требуется сертификация и у нас она есть",
  "firstname": "Василий",
  "lastname": "Иваной",
  "surname": "Васильевич",
  "phone_number": "89999990099",
  "email": "example@exaple.com",
  "telegram_id": "",
  "other_data": "other_data",
  "email_company": "email_company@example.com",
  "company_name": "company_name",
  "inn": "433 333 333 444",
  "url": "http:\/\/example.com",
  "original_source": "Источник",
  "presentation_link": "Ссылка на презентацию",
  "logo": "url",
  "images": "[\"url\", \"url\", \"url\"]",
  "created_at": "2021-12-03T18:38:21.000000Z",
  "updated_at": "2021-12-03T19:34:40.000000Z",
  "category": {
    "id": 3,
    "name": "Цифровые технологии в транспорте"
  },
  "stage_of_ready": {
    "id": 1,
    "name": "Идея"
  },
  "company": {
    "id": 5,
    "name": "АМПП",
    "description": "АМПП",
    "city_id": 2,
    "comment": "АМПП"
  }
}

GET /api/tasks

POST /api/tasks
{
  what_hurts          stting
  symptoms            stting
  consequences        stting
  reason              stting
  objects             stting
  deadlines           stting
  what_attempted      stting
  contacts            stting
}

GET /api/projectStatuses
GET /api/stagesOfReady
GET /api/categories
```
