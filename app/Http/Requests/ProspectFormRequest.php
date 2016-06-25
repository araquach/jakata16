<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProspectFormRequest extends Request
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
            'id' => '',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email',
            'mobile' => 'required',
            'address1' => 'required',
            'address2' => '',
            'town' => 'required',
            'postcode' => 'required',
            'regular' => 'boolean',
            'texture' => 'required',
            'condition' => 'required',
            'cut_spend' => 'required',
            'colour_spend' => 'required'
        ];
    }
}
