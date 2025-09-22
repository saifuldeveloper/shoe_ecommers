<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemVariant extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'variant_sku', 'variant_id', 'position', 'item_code', 'additional_cost', 'additional_price', 'qty'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
