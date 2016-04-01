<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    protected $fillable = [
            'date', 'first_name', 'second_name', 'address1', 'address2', 'postcode', 'email', 'phone', 'mobile', 'current_emp', 'current_emp_des', 'school_qual', 'qual_non_hair', 'adex_stock', 'adex_manage', 'adex_train', 'adex_reception', 'adex_marketing', 'adex_cservice', 'experience', 'current_position', 'client_base', 'qualifications', 'cutting_skills', 'colour_knowledge', 'colour_skills', 'men', 'extensions_weave', 'extensions_other', 'chem_straighten', 'braz_blow', 'awards', 'about_you', 'why_hairdressing', 'why_jakata'
        ];
}
