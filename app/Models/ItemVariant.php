<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVariant extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'variant_id', 'position', 'item_code', 'additional_cost', 'additional_price', 'qty'];
}
