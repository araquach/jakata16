<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StylistNote extends Model
{
    public function stylist()
    {
        return $this->belongsTo('App\Stylist');
    }
}
