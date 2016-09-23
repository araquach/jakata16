<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprenticeNote extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function apprentice()
    {
        return $this->belongsTo('App\Apprentice');
    }
}
