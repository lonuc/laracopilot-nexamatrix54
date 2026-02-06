<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'client_id',
        'service_id',
        'quantity',
        'specifications',
        'total_price',
        'status',
        'delivery_date'
    ];
    
    protected $casts = [
        'total_price' => 'decimal:2',
        'delivery_date' => 'date'
    ];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}