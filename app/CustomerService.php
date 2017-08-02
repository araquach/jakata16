<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $table = 'customerservices';
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
