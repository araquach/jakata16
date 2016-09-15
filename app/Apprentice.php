<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function apprenticeNotes()
    {
        return $this->hasMany('ApprenticeNote');
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
                return "Needs sorting";
        }
    }
    
    public function getQualityAttribute($value)
    {
        switch($value) {
            case "1":
                return "We need them!";
                break;
            case "2":
                return "Has Potential";
                break;
            case "3":
                return "Put on backburner";
                break;
            case "4":
                return "Discard";
                break;
            default:
                return "Not Rated";
        }
    }
    
}
