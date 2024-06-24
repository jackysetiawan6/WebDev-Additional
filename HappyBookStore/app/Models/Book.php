<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    public function detail()
    {
        return $this->hasOne(Detail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
