<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category as CategoryResource;
use App\Models\Category;

class CategoriesController extends RestController
{

    public function __invoke()
    {
        return $this->sendResponse(CategoryResource::collection(
            Category::with(['subcategories'])->get())
        );
    }
}
