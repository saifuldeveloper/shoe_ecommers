<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrackOrder extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'item_id',
        'order_id'
    ];

    public function order()
    {
    	return $this->belongsTo('App\Models\Order','order_id')->withDefault();
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
