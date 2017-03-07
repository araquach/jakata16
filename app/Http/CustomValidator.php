<?php

namespace App\Http;

use App\User;
use Carbon\Carbon;
use Auth;

class CustomValidator {
     
     public function validateOneOrFive($attribute, $value, $parameters, $validator)
     {
        $data = collect($validator->getData());
         
        $data = $data->slice(4);
          
        if($data->contains(1) or $data->contains(5))
        {
        return false;
        }
        
        return true;
     }

}