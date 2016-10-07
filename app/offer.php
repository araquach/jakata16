<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class offer extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
}
