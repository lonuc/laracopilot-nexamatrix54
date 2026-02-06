<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'company_name',
        'contact_name',
        'email',
        'password',
        'phone',
        'address',
        'city',
        'country',
        'client_type'
    ];
    
    protected $hidden = [
        'password'
    ];
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}