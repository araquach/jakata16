<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackClient extends Model
{
    protected $guarded = ['id'];
    
    public function feedback()
    {
        return $this->hasOne('App\Feedback', 'client_id');
    }
}
