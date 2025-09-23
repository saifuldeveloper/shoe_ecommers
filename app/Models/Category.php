<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'status',
        'description',
        'meta_keywords',
        'meta_descriptions',
        'is_in_menu',
        'menu_serial',
        'is_featured',
        'featured_serial',
        'parent_id',
    ];

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function subcategory()
    {
        return $this->hasMany('App\Models\Subcategory');
    }
}
