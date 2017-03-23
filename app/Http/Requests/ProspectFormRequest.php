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
    
    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#prospect-form';
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
            'email' => 'required | email | unique:prospects',
            'mobile' => 'required | unique:prospects',
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
    
    public function messages()
    {
        return [
            'first_name.required' => 'Your first name is required',
            'last_name.required' => 'Your last name is required',
            'email.required' => 'Your email address is required',
            'email.email' => 'You must enter a valid email address',
            'email.unique' => 'Sorry - you can only enter once',
            'mobile.required' => 'Please enter your mobile phone number',
            'mobile.unique' => 'Sorry - you can only enter once',
            'address1.required' => 'The first line of your address is required',
            'town.required' => 'Your town is required',
            'postcode.required' => 'Please enter your postcode',
            'texture.required' => 'Please tell us your hair texture',
            'condition.required' => 'Please tell us the condition of your hair',
            'cut_spend.required' => 'Please tell us your average cut spend',
            'colour_spend.required' => 'Please tell us your average colour spend'
        ];
    }
}
