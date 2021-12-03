<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageOfReady extends Model
{
    use HasFactory;

    protected $table = 'stages_of_ready';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
