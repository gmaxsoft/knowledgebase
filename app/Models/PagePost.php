<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category',
        'category_id',
        'user_id'
    ];
}
