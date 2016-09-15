<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprenticeNote extends Model
{
    public function apprentice()
    {
        return $this->belongsTo('App\Apprentice');
    }
}
