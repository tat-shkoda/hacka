<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'what_hurts',
        'symptoms',
        'consequences',
        'reason','objects',
        'deadlines',
        'what_attempted',
        'contacts',
    ];
}
