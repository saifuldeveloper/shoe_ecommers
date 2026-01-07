<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageRewardPoint extends Model
{
    use HasFactory;

   protected $fillable = [
        'reward_point',
        'status',
    ];

}
