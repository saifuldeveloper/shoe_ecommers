<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
      protected $fillable = [
        'order_id',
        'item_id',
        'item_name',
        'item_code',
        'item_image',
        'qty',
        'price',
        'total_price',
        'variant_price',
        'item_variant_id',
        'details',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
