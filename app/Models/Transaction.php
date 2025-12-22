<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = ['order_id','amount','email','txn_id','currency_sign','currency_value'];

    public function order()
    {
    	return $this->belongsTo(Order::class)->withDefault();
    }

    public function user()
    {
    	return $this->hasOne(User::class,'email','user_email')->withDefault();
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
