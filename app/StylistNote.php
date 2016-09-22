<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StylistNote extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function stylist()
    {
        return $this->belongsTo('App\Stylist');
    }
}
