<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

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
			'first_name' => 'required',
			'second_name' => 'required',
			'email' => 'required|email',
			'email_confirm' => 'required|same:email',
			'mobile' => 'required',
			'body' => 'required',
		];
	}
	
	public function messages()
	{
		return [
    	    'first_name.required' => 'Please enter your first name',
    	    'second_name.required' => 'Please enter your second name',
    	    'email.required' => 'Please enter your email address',
    	    'email.email' => 'Please enter a valid email address',
    	    'email_confirm.required' => 'Please repeat your email address',
    	    'email_confirm.same' => 'Please ensure you have entered your email address correctly',
    	    'mobile.required' => 'Please enter your mobile number',
    	    'body.required' => 'Your message cannot be blank',
		];
	}

}
