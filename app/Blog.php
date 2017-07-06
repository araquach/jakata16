<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function paras()
    {
        return $this->hasMany('App\BlogPara')->orderBy('id', 'asc');
    }
}
