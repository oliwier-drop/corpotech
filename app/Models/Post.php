<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'image_path',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_robots',
    ];
}
