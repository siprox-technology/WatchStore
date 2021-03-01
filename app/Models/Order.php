<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\Order_items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
    'status',
    'delivery_address', 
    'delivery_city',
    'delivery_state', 
    'delivery_postal_code', 
    'delivery_country',
    'delivery_price',
    'total_price',
    'user_id'
    ];

    public function order_items()
    {
        return $this->hasMany(Order_items::class);
    }
}
