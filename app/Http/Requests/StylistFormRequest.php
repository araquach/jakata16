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
	
	protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#form';
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
			'address2' => '',
			'town' => 'required',
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
			'why_us' => 'required',
		];
	}
	
	public function messages()
	{
	    return [
	        'first_name.required' => 'First Name is required',
	        'second_name.required'  => 'Second Name is required',
	        'address1.required' => 'Address 1 is required',
	        'address2.required' => 'Address 2 is required',
	        'town.required' => 'Town is required',
	        'postcode.required' => 'Postcode is required',
	        'email.required' => 'Your email address is required',
	        'email.email' => 'Please provide a valid email address',
	        'mobile.required' => 'Your mobile number is required',
	        'current_emp.required' => 'Your current employment status is required',
	        'school_qual.required' => 'Your school qualifications are required',
	        'experience.required' => 'Your experience is required',
	        'current_position.required' => 'Your current position is required',
	        'client_base.required' => 'Your client base is required',
	        'qualifications.required' => 'Your qualifications are required',
	        'cutting_skills.required' => 'Please provide your cutting skills',
	        'colour_knowledge.required' => 'Please provide your colour knowledge',
	        'colour_skills.required' => 'Please provide your colour skills',
	        'men.required' => 'Please provide your mens hairdressing skills',
	        'extensions_weave.required' => 'Please provide your woven extension skills',
	        'extensions_other.required' => 'Please provide your extensions (other) skills',
	        'chem_straighten.required' => 'Please provide your chemical straightening skills',
	        'braz_blow.required' => 'Please provide your brazilian blowdrying skills',
	        'hair_up.required' => 'Please provide your hair up skills',
	        'about_you.required' => 'The about you section can\'t be blank',
	        'why_hairdressing.required' => '\'Why Hairdressing\' can\'t be blank',
	        'why_us.required' => '\'Why Jakata\' can\'t be blank',
		];
	}

}
