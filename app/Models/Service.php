<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category',
        'description',
        'base_price',
        'active'
    ];
    
    protected $casts = [
        'base_price' => 'decimal:2',
        'active' => 'boolean'
    ];
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}