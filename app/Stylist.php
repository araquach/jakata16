<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Stylist extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $with = ['notes'];
    
    public function notes()
    {
        return $this->hasMany('App\StylistNote');
    }
    
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
    
    public function getContactStatusAttribute($value)
    {
        switch($value) {
            case 1:
                return "Not Contacted";
                break;
            case 2:
                return "Left Message";
                break;
            case 3:
                return "Spoke Direct";
                break;
            default:
                return "Needs Sorting";
        }
    }
    
    public function getQualityAttribute($value)
    {
        switch($value) {
            case 1:
                return "We need them!";
                break;
            case 2:
                return "Has Potential";
                break;
            case 3:
                return "Put on backburner";
                break;
            case 4:
                return "Discard";
                break;
            default:
                return "Not Rated";
        }
    }
}
