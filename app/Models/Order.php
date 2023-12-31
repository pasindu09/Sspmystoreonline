<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;



    protected $fillable = [
        'order_number',
        'user_id',
        'products',
        'total_amount',
        'shipping_address',
        'status',
    ];
    
}
