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
			'id' => 'required',
			'date' => 'required',
			'first_name' => 'required',
			'second_name' => 'required',
			'age' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'postcode' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'mobile' => 'required',
			'current_emp' => 'required',
			'in_salon' => 'required',
			'salon_name' => 'required',
			'qualification_school' => 'required',
			'qualification_hair' => 'required',
			'experience' => 'required',
			'current_position' => 'required',
			'client_base' => 'required',
			'qualifications' => 'required',
			'cutting_skills' => 'required',
			'colour_knowledge' => 'required',
			'colouring' => 'required',
			'men' => 'required',
			'extensions' => 'required',
			'chem_straightening' => 'required',
			'brazil_blow' => 'required',
			'hair_up' => 'required',
			'about_you' => 'required',
			'why_hairdressing' => 'required',
			'why_jakata' => 'required',
		];
	}

}
