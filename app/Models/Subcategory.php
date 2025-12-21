<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'slug', 'category_id', 'status'];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault();
    }

    public function childcategory()
    {
        return $this->hasMany('App\Models\ChieldCategory')->where('status', 1);
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item')->where('status', 1);
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
