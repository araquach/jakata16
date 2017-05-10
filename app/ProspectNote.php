<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectNote extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function prospect()
    {
        return $this->belongsTo('App\Prospect');
    }
}
