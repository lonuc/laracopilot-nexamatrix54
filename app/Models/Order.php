<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'client_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'service_id',
        'quantity',
        'format',
        'dimensions',
        'carton_type',
        'finishes',
        'specifications',
        'uploaded_files',
        'total_price',
        'status',
        'delivery_date'
    ];
    
    protected $casts = [
        'total_price' => 'decimal:0',
        'uploaded_files' => 'array',
        'finishes' => 'array',
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