<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'image_path', 
        'badge', 
        'shop_url', 
        'is_featured'
    ];
}