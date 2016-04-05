<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $fillable = [
            'date', 'first_name', 'second_name', 'age', 'address1', 'address2', 'postcode', 'email', 'phone', 'mobile', 'current_emp', 'in_salon', 'salon_name', 'qualification_school', 'qualification_hair', 'cutting', 'styling', 'colouring', 'men', 'extensions', 'chem_straightening', 'brazil_blow', 'hair_up', 'about', 'why_hairdressing', 'why_jakata'
        ];
}
