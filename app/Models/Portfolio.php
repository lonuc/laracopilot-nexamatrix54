<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'client_name',
        'category',
        'image_path',
        'image_name',
        'featured'
    ];
    
    protected $casts = [
        'featured' => 'boolean'
    ];
}