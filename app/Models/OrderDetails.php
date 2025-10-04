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
}
