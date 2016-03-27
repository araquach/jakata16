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
			'stylist_id' => 'required',
			'date' => 'required',
			'first_name' => 'required'
			'second_name' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'address3' => 'required',
			'postcode' => 'required',
			'email' => 'required';
			'phone' => 'required',
			'mobile' => 'required',
			'current_emp' => 'required',
			'current_emp_des' => 'required',
			'school_qual' => 'required',
			'qual_non_hair' => 'required',
			'adex_stock' => 'required',
			'adex_manage' => 'required',
			'adex_train' => 'required',
			'adex_reception' => 'required',
			'adex_marketing' => 'required',
			'adex_cservice' => 'required',
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
			'awards' => 'required',
			'about_you' => 'required',
			'why_hairdressing' => 'required',
			'why_jakata', => 'required',
		];
	}

}
