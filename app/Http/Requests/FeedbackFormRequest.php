<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FeedbackFormRequest extends Request
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
            'intro' => 'required',
            'consultation' => 'required',
            'styling_area' => 'required',
            'stylist_appearance' => 'required',
            'prod_advice' => 'required',
            'styling_advice' => 'required',
            'mkt1' => 'required',
            'mkt2' => 'required',
            'mkt3' => 'required',
            'value_for_money' => 'required',
            'whole_experience' => 'required',
            'end_result' => 'required',
            'extra' => '',
            'extra_edit' => '',
        ];
    }
    
    public function messages()
    {
        return [
            'intro.required' => 'Please rate the introduction to your stylist',
            'consultation.required' => 'Please rate your consultation',
            'styling_area.required' => 'Please rate the cleanliness of styling area',
            'stylist_appearance.required' => 'Please rate your stylists appearence',
            'prod_advice.required' => 'Please rate the product advice given',
            'styling_advice.required' => 'Please rate the styling advice given',
            'value_for_money.required' => 'Please rate value for money',
            'whole_experience.required' => 'Please rate your whole experience',
            'end_result.required' => 'Please rate the end result'
        ];
    }
}