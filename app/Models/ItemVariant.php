<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVariant extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'variant_sku', 'variant_id', 'position', 'item_code', 'additional_cost', 'additional_price', 'qty'];

    public function size()
    {
        return $this->belongsTo('App\Models\Size','variant_id')->withDefault();
    }
    public function color()
    {
        return $this->belongsTo('App\Models\Color','variant_id')->withDefault();
    }
}
