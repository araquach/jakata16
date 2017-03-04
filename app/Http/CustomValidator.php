<?php

namespace App\Http;

use App\User;
use Carbon\Carbon;
use Auth;

class CustomValidator {
     
     public function validateSomething($attribute, $value, $parameters, $validator)
     {
         $data = array_get($validator->getData(), $parameters[0]);
         
         if($date->addWeeks($weeks))
         {
             return true;
         }
         
         return false;
     }

}