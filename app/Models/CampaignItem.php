<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignItem extends Model
{
    public $timestamps = false;
    protected $fillable = ['item_id', 'campaign_id', 'status', 'is_feature'];

    public function item()
    {
       return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function campaignItem()
    {
        return $this->belongsTo(
            TopCampaignOffer::class,
            'campaign_id',
            'id'
        );
    }

}
