<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'status',
        'is_in_menu',
        'menu_serial',
        'is_banner',
        'banner_serial',
        'is_featured',
        'featured_serial',
        'parent_id',
    ];

    public function items()
    {
        return $this->hasMany(Item::class,'category_id');
    }

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    protected static function booted()
    {
        static::deleting(function ($factory) {
            if (auth()->check()) {
                $factory->deleted_by = auth()->id();
                $factory->save();
            }
        });
    }
}
