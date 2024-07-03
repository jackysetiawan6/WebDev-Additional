<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'task',
        'owner',
        'due_date',
        'priority',
        'notes',
        'budget',
    ];

    protected $dates = [
        'due_date',
    ];

    protected $casts = [
        'due_date' => 'datetime',
    ];
}
