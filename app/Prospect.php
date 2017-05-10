<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function offer()
    {
        return $this->hasMany('App\ProspectOffer');
    }
    
    public function notes()
    {
        return $this->hasMany('App\ProspectNote')->orderBy('id', 'desc');
    }
}
