<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardPointHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'point',
        'type',   // credit | debit
        'note',
    ];
}
