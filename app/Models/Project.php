<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function subcategory(): belongsTo
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }

    public function stageOfReady(): belongsTo
    {
        return $this->belongsTo(StageOfReady::class, 'stages_of_ready_id', 'id');
    }

    public function company(): belongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
