<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use App\Models\ItemVariant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color_id', 'size_id'];

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function itemVariants()
    {
        return $this->hasMany(ItemVariant::class);
    }
}
