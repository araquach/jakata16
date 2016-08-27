<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
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
    
    public function getContactStatusAttribute($value)
    {
        switch($value) {
            case "1":
                return "Not Contacted";
                break;
            case "2":
                return "Left Message";
                break;
            case "3":
                return "Spoke Direct";
                break;
            default:
                return NULL;
        }
    }
    
    public function getQualityAttribute($value)
    {
        switch($value) {
            case "1":
                return "Discard";
                break;
            case "2":
                return "Put on backburner";
                break;
            case "3":
                return "Has Potential";
                break;
            case "4":
                return "We need them!";
                break;
            default:
                return NULL;
        }
    }
    
}
