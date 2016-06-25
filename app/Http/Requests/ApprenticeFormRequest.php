<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class ApprenticeFormRequest extends Request {

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
			'date' => '',
			'first_name' => 'required',
			'second_name' => 'required',
			'age' => 'required',
			'address1' => 'required',
			'address2' => '',
			'town' => 'required',
			'postcode' => 'required',
			'email' => 'required | email',
			'phone' => '',
			'mobile' => 'required',
			'current_emp' => 'required',
			'in_salon' => 'required',
			'salon_name' => '',
			'qualification_school' => 'required',
			'qualification_hair' => 'required',
			'cutting' => 'required',
			'styling' => 'required',
			'colouring' => 'required',
			'men' => 'required',
			'extensions' => 'required',
			'chem_straightening' => 'required',
			'brazil_blow' => 'required',
			'hair_up' => 'required',
			'about' => 'required',
			'why_hairdressing' => 'required',
			'why_jakata' => 'required',
		];
	}
	
	public function messages()
	{
	    return [
	        'first_name.required' => 'First Name is required',
	        'second_name.required'  => 'Second Name is required',
	        'age.required' => 'Your age is required',
	        'address1.required' => 'Address 1 is required',
	        'address2.required' => 'Address 2 is required',
	        'town.required' => 'Town is required',
	        'postcode.required' => 'Postcode is required',
	        'email.required' => 'Your email address is required',
	        'email.email' => 'Please provide a valid email address',
	        'mobile.required' => 'Your mobile number is required',
	        'current_emp.required' => 'Your current employment status is required',
	        'in_salon.required' => 'Your current position is required',
	        'qualification_school.required' => 'Your school qualifications are required',
	        'qualification_hair.required' => 'Your hairdressing qualifications are required',
	        'cutting.required' => 'Your interest in cutting is required',
	        'styling.required' => 'Your interest in hair styling is required',
	        'colouring.required' => 'Your interest in colouring is required',
	        'men.required' => 'Your interest in men\'s hairdressing is required',
	        'extensions.required' => 'Your interest in hair extensions is required',
	        'chem_straightening.required' => 'Your interest in chemical straightening is required',
	        'brazil_blow.required' => 'Your interest in Brazilian blowdy\'s is required',
	        'hair_up.required' => 'Your interest in hair up styling is required',
	        'about_you.required' => 'The about you section can\'t be blank',
	        'why_hairdressing.required' => '\'Why Hairdressing\' can\'t be blank',
	        'why_jakata.required' => '\'Why Jakata\' can\'t be blank',
		];
	}

}
