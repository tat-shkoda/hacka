<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stages_of_ready_id',
        'category_id',
        'subcategory_id',
        'short_description',
        'benefit',
        'company_id',
        'certification_type',
        'firstname',
        'lastname',
        'surname',
        'phone_number',
        'email',
        'telegram_id',
        'other_data',
        'email_company',
        'company_name',
        'inn',
        'url',
        'original_source',
        'presentation_link',
        'logo',
        'images',
    ];

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

    public function status(): belongsTo
    {
        return $this->belongsTo(ProjectStatus::class, 'status_id', 'id');
    }
}
