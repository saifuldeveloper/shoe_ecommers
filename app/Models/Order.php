<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'user_info',
        'cart',
        'shipping',
        'discount',
        'payment_method',
        'txnid',
        'charge_id',
        'transaction_number',
        'order_status',
        'payment_status',
        'shipping_info',
        'billing_info',
        'currency_sign',
        'currency_value',
        'tax',
        'state_price',
        'state',
        'sale_note',    
        'is_reward_point_used'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User')->withDefault();
    }

    public function tracks()
    {
        return $this->belongsTo('App\Models\TrackOrder', 'order_id')->withDefault();
    }

    public function tranaction()
    {
        return $this->hasOne('App\Models\Transaction', 'order_id')->withDefault();
    }

    public function tracks_data()
    {
        return $this->hasMany('App\Models\TrackOrder', 'order_id');
    }

    public function notificaton()
    {
        return $this->hasMany('App\Models\Notification', 'order_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id');
    }



    public function getTotalOrderPriceAttribute()
    {
        $detailsTotal = $this->orderDetails->sum(function ($detail) {
            return $detail->total_price * $detail->qty; // quantity use korte hobe, total_price na
        });
        $shipping = $this->shipping ?? 0;
        $tax = $this->tax ?? 0;
        $discount = $this->discount ? json_decode($this->discount, true)['discount'] ?? 0 : 0;

        return $detailsTotal + $shipping + $tax - $discount;
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
