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

}
