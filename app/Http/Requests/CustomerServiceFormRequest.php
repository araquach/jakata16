<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerServiceFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'client_name' => 'required',
            'meet_greet' => 'required | integer',
            'consultation' => 'required | integer',
            'main_service' => 'required | integer',
            'retail' => 'required | integer',
            'cleanliness' => 'required | integer',
            'education' => 'required | integer',
            'closing_sale' => 'required | integer',
            'extra' => ''
        ];
    }
}
