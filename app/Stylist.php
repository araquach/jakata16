<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Stylist extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function getSalonIdAttribute($value)
    {
        if ($value == 1) {
            return 'Jakata';
        }
        
        else if ($value == 2) { 
            return 'Paul Kemp';
        }
        
        else {
            return 'Undefined';
        }
    }
}
