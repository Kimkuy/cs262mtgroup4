<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalNews extends Model
{
    protected $fillable = ['title', 'image_path', 'author', 'published_date', 'content', 'url', 'filters'];
}
