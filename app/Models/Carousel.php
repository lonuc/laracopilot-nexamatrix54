<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carousel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'button_text',
        'button_link',
        'order',
        'active'
    ];
    
    protected $casts = [
        'active' => 'boolean'
    ];
}