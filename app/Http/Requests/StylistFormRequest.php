<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class StylistFormRequest extends Request {

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
			'address1' => 'required',
			'address2' => 'required',
			'postcode' => 'required',
			'email' => 'required | email',
			'phone' => '',
			'mobile' => 'required',
			'current_emp' => 'required',
			'current_emp_des' => '',
			'school_qual' => 'required',
			'qual_non_hair' => '',
			'adex_stock' => '',
			'adex_manage' => '',
			'adex_train' => '',
			'adex_reception' => '',
			'adex_marketing' => '',
			'adex_cservice' => '',
			'experience' => 'required',
			'current_position' => 'required',
			'client_base' => 'required',
			'qualifications' => 'required',
			'cutting_skills' => 'required',
			'colour_knowledge' => 'required',
			'colour_skills' => 'required',
			'men' => 'required',
			'extensions_weave' => 'required',
			'extensions_other' => 'required',
			'chem_straighten' => 'required',
			'braz_blow' => 'required',
			'hair_up' => 'required',
			'awards' => '',
			'about_you' => 'required',
			'why_hairdressing' => 'required',
			'why_jakata' => 'required',
		];
	}

}
