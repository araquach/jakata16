<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Offer extends Model
{
    protected $fillable = ['opt_out'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getStylistLevelAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function getGenderAttribute($value)
    {
        return strtoupper($value);
    }
}
