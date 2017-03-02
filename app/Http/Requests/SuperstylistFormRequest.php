<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SuperstylistFormRequest extends Request
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
            'client_care_own' => 'required | integer',
            'client_care_others' => 'required | integer',
            'help_availability' => 'required | integer',
            'pos_mentality' => 'required | integer',
            'proactive' => 'required | integer',
            'passion' => 'required | integer',
            'work_quality' => 'required | integer',
            'educate_clients' => 'required | integer',
            'convers_on_client' => 'required | integer',
            'overall_rating' => 'required | integer',
            'extra' => '',
        ];
    }
}
