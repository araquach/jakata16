<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectOffer extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['date_redeemed'];
    
    public function prospect()
    {
        return $this->belongsTo('App\Prospect');
    }
}
